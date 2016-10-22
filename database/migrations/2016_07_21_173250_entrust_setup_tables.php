<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

use App\Role;
use App\User;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });
        
        

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = '管理人員'; // optional
        $admin->description  = ''; // optional
        $admin->save();
        $checker = new Role();
        $checker->name         = 'checker';
        $checker->display_name = '審核人員'; // optional
        $checker->description  = ''; // optional
        $checker->save();
        $maintain = new Role();
        $maintain->name         = 'maintain';
        $maintain->display_name = '維護人員'; // optional
        $maintain->description  = ''; // optional
        $maintain->save();
        
        $customer = new Role();
        $customer->name         = 'customer';
        $customer->display_name = '客戶'; // optional
        $customer->description  = ''; // optional
        $customer->save();
        
        $user = User::create([
            'name' => "admin",
            'email' => "admin@attz.tw",
            'password' => bcrypt("admin"),
        ]);
        
        $user->attachRole($admin); 
        $user->attachRole($checker); 
        $user->attachRole($maintain); 
        $user->save();
        
        $user = User::create([
            'name' => "checker",
            'email' => "checker@attz.tw",
            'password' => bcrypt("checker"),
        ]);
        $user->attachRole($checker); 
        $user->attachRole($maintain); 
        $user->save();
        
        $user = $user = User::create([
            'name' => "maintain",
            'email' => "maintain@attz.tw",
            'password' => bcrypt("maker"),
        ]);
        $user->attachRole($maintain); 
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('role_user');
        Schema::drop('roles');
    }
}
