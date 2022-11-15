<?php

use App\Model\Role\SysGroupPermissions;
use App\Model\Role\SysUserGroup;
use App\Model\Designation;
use App\Model\Department;
use App\Model\Specialist;
use App\Model\BookingType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

// function formatTree($all_categories,$root_categories){       
//     foreach ($root_categories as $key => $root) {
//         $root->children = $all_categories->where('parent_id',$root->id);
//         if($root->children){
//             formatTree($all_categories,$root->children);
//         }
//     }
//     return $root_categories;

// }
if (! function_exists('getRolesByGroupId')) {
    function getRolesByGroupId($group_id){
        $cache_key = config('sys.role_cache').'_'.$group_id;
//        Cache::forget($cache_key);
        if(!Cache::has($cache_key)){
            Cache::rememberForever($cache_key, function() use($group_id) {
                return SysGroupPermissions::where('sys_group_id',$group_id)->get();
            });
        }
        return Cache::get($cache_key);
    }
}
function formatTree($rows, $roles, $parent_id = 0){
    $arrange_menus = [];
    $i = 0;
    foreach ($rows as $row)
    {
        $i++;
        if($row['parent_id'] == $parent_id)
        {
            $children = formatTree($rows,$roles,$row['id']);
            if ($children)
            {
                $row['sub_menu'] = $children;
                $arrange_menus[] = $row;
            }
            else
            {
                if($row['status']==1&&in_array($row['uri'],$roles))
                    $arrange_menus[] = $row;
            }
        }
    }
    return $arrange_menus;
}
if (! function_exists('getRoles')) {
    function getRoles(){
        if(!Cache::has(config('sys.role_cache'))){
            Cache::rememberForever(config('sys.role_cache'), function() {
                return SysGroupPermissions::all()->toArray();
            });
        }
        return Cache::get(config('sys.role_cache'));
    }
}
function buildChildParent($rows){
    $arrange_menus=[];
    foreach ($rows as $row)
    {
        $arrange_menus[$row['id']]=$row['parent_id'];
    }
    return $arrange_menus;
}
function getActiveNodes($array, $id){
    $ids[]=$id;
    while(!empty($array[$id]))
    {
        $ids[]=$array[$id];
        $id = $array[$id];
    }
   return $ids;
}
if (!function_exists('getBloodGroup')) {
    function getBloodGroup(){
        $bloodGroup = array(
            '1'     =>  'O+',
            '2'     =>  'O-',
            '3'     =>  'A+',
            '4'     =>  'A-',
            '5'     =>  'B+',
            '6'     =>  'B-',
            '7'     =>  'AB+',
            '8'     =>  'AB-',              
        );
        return $bloodGroup;
    }
}
if (!function_exists('getMaritalStatus')) {
    function getMaritalStatus(){
        $maritalStatus = array(
            '1'     =>  'Married',
            '2'     =>  'Unmarried',
            '3'     =>  'Widowed',
            '4'     =>  'Separated',
            '5'     =>  'Not Specified'             
        );
        return $maritalStatus;
    }
}
if (!function_exists('getUserGroups')) {
    function getUserGroups(){
        $userGroups = SysUserGroup::pluck('name','id');
        return $userGroups;
    }
}
if (!function_exists('getDesignations')) {
    function getDesignations(){
        $designations = Designation::where('status',1)->pluck('desig_name','desig_id');
        return $designations;
    }
}
if (!function_exists('getSpecialists')) {
    function getSpecialists(){
        $specialists = Specialist::where('status',1)->pluck('spec_name','spec_id');
        return $specialists;
    }
}
if (!function_exists('getDepartments')) {
    function getDepartments(){
        $departments = Department::where('status',1)->pluck('dept_name','dept_id');
        return $departments;
    }
}
if (!function_exists('BookingType')) {
    function BookingType(){
        $bookingsources = BookingType::where('status',1)->pluck('booking_type_name','booking_type_id');
        return $bookingsources;
    }
}

