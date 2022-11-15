<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use Image;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Support\Facades\Validator;

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
// Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

class CustomerController extends ResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'image'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'customer_name'=> 'required',
            'address'      => 'required',
            'phone'        => 'required|unique:customers',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            $errors = $validator->messages()->toArray();
            $msg = 'Validation Error';
            return $this->respondWithError($msg,$errors,422);
        }
        else{
            $input = $request->all();
            $filename = '';
            if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 400)->save( public_path('assets/images/' . $filename));
          }
            $input['image'] = $filename;
            $input['created_by'] = auth()->user()->id;
            unset($input['_token']);
            Customer::firstOrCreate($input);
            $msg = 'Customer Enrollment Successfully Done!';
            return $this->respondWithSuccess($msg,$input,200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function customerDatatableAjax(Request $req){
        $columns = array(
          0 => 'customer_id',
          1 => 'customer_name',
          2 => 'mobile',
          3 => 'email',
          4 => 'actions'
      );
        $totalData     = Customer::count();
        $totalFiltered = $totalData; 

        $limit         = $req->get('length');
        $start         = $req->get('start');
        // $order = $columns[$req->get('order.column')];
        $dir           = $req->get('order.0.dir');
        $search_arr    = $req->get('search');
        $search        = $search_arr['value'];

        if(empty($search)){
            $customers = Customer::offset($start)
            ->limit($limit)
            ->orderBy('created_at','desc')
            ->get();
        }
        else{
            $customers = Customer::where('customer_name', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->offset($start)
            ->limit($limit)
            ->orderBy('created_at','desc')
            ->get();

            $totalFiltered = Customer::where('customer_name', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->count();
        }
        
        $data = array();
        if($customers){
            foreach($customers as $customer){
                $imageURL                      = asset('assets/images/'.$customer->image);
                // $editUrl                    = route('customer.edit',$customer['customer_id']);
                $nestedData['customer_name']   = $customer->customer_name;
                $nestedData['address']         = $customer->address;
                $nestedData['phone']           = $customer->phone;
                $nestedData['email']           = $customer->email;
                $nestedData['image']           = "<img src='{$imageURL}' class='profile-user-img img-responsive img-circle img-sm zoom' alt='Member Image'>";
                $nestedData['actions']         = "<a class='btn-primary btn btn-rounded' id='edit' data-id='".$customer->customer_id."' style='padding:0px 4px;' href='#'><i class='fa fa-edit'></i></a>
                 <a class='btn-info btn btn-rounded' id='show' data-id='".$customer->customer_id."' style='padding:0px 4px;' data-toggle='modal' data-target='#patient_info_modal' data-backdrop='static' data-keyboard='false' href='#'><i class='fa fa-eye'></i></a>";
                $data[] = $nestedData;
            }
        }

        $json_data = array(
         "draw"                 => intval($req->get('draw')),
         "iTotalRecords"        => intval($totalData),
         'iTotalDisplayRecords' => intval($totalFiltered),
         'limit'                => $limit,
         "aaData"               => $data
     );

        echo json_encode($json_data);
    }
}
