<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Branch;
use App\Models\BranchWarehouse;
use App\Models\EmployeeBranch;
use App\Models\Position;

class UserInfoHelper
{
	public static function employee_id()
	{
		return session()->get('user')->employee_id;
	}

	public static function employee()
	{
		return session()->get('employee');
	}

	// public static function position_name()
	// {
	// 	$position_id = session()->get('employee')->position_id;
	// 	$position = Position::find($position_id);
	// 	if ($position != null) {
	// 		return $position->name;
	// 	}
	// 	return "-";
	// }

	public static function check_access($menu_name, $access_name)
	{
		$access = json_decode(session()->get('user')->accessibility, true);
		return $access[$menu_name][$access_name];
	}

	public static function selected_branch_id()
	{
		return session()->get('employee')->selected_branch_id;
	}

	public static function selected_warehouse_id()
	{
		return session()->get('employee')->selected_warehouse_id;
	}

	public static function user()
	{
		return session()->get('user');
	}

	public static function user_id()
	{
		// return session()->get('user')->id;
	}

	public static function branch_id()
	{
		return session()->get('employee')->branch_id;
	}

	// public static function branch()
	// {
	// 	$branch_id = self::branch_id();
	// 	return Branch::find($branch_id);
	// }

	public static function accessibility()
	{
		return session()->get('user')->accessibility;
	}


	public static function has_access($access_type, $sub_access = null)
	{
		$access = json_decode(session()->get('user')->accessibility, true);
		return $access[$access_type][$access_type . "_" . $sub_access];
	}


	public static function response_custom_message($msg) {
		return $msg;
	}

	public static function response_no_print_quota() {
		return "Tidak ada kuota untuk print invoice terpilih";
	}

	public static function response_no_branch_selected() {
		return "Tidak ada cabang terpilih";
	}

	public static function response_no_warehouse_selected() {
		return "Tidak ada gudang terpilih";
	}

	public static function response_no_primary_warehouse() {
		return "Tidak ada data gudang utama pada cabang ini, harap periksa data gudang utama dari cabang terpilih";
	}

    public static function get_user_ip()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

	public static function get_unique_code($n, $prefix = "") {
		$characters = 'ADEGHIJLNOPQRTUVWXYZ';
		$result = '';
	 
		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$result .= $characters[$index];
		}
	 
		return $result . $prefix;
	}
}
