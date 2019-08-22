<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;
use App\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

                //Menu

                Gate::define('add-menu', function ($user) {
                    $role = Role::where('id', $user->role_id)->first();
        
                    if (!is_null($user->extra_permissions)) {
                        $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                        return in_array('add_menu', $merger);
                    }
                    return in_array('add_menu', json_decode($role->permissions));
                });
        
                
        
                Gate::define('view-menu', function ($user) {
                    $role = Role::where('id', $user->role_id)->first();
                        // dd($role);
                    if (!is_null($user->extra_permissions)) {
                        $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                        return in_array('view_menu', $merger);
                    }
                    return in_array('view_menu', json_decode($role->permissions));
                });
        
                Gate::define('update-menu', function ($user) {
                    $role = Role::where('id', $user->role_id)->first();
        
                    if (!is_null($user->extra_permissions)) {
                        $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                        return in_array('update_menu', $merger);
                    }
                    return in_array('update_menu', json_decode($role->permissions));
                });
        
                Gate::define('delete-menu', function ($user) {
                    $role = Role::where('id', $user->role_id)->first();
        
                    if (!is_null($user->extra_permissions)) {
                        $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                        return in_array('delete_menu', $merger);
                    }
                    return in_array('delete_menu', json_decode($role->permissions));
                });

        //About Page

        Gate::define('add-about', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_about', $merger);
            }
            return in_array('add_about', json_decode($role->permissions));
        });

        Gate::define('update-about-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_about_page', $merger);
            }
            return in_array('update_about_page', json_decode($role->permissions));
        });

        Gate::define('view-about', function ($user) {
            $role = Role::where('id', $user->role_id)->first();
                // dd($role);
            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_about', $merger);
            }
            return in_array('view_about', json_decode($role->permissions));
        });

        Gate::define('update-about', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_about', $merger);
            }
            return in_array('update_about', json_decode($role->permissions));
        });

        Gate::define('delete-about', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_about', $merger);
            }
            return in_array('delete_about', json_decode($role->permissions));
        });

        //Contact

        Gate::define('add-contact', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_contact', $merger);
            }
            return in_array('add_contact', json_decode($role->permissions));
        });

        Gate::define('view-contact', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_contact', $merger);
            }
            return in_array('view_contact', json_decode($role->permissions));
        });

        Gate::define('update-contact', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_contact', $merger);
            }
            return in_array('update_contact', json_decode($role->permissions));
        });

        Gate::define('update-contact-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_contact_page', $merger);
            }
            return in_array('update_contact_page', json_decode($role->permissions));
        });


        Gate::define('delete-contact', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_contact', $merger);
            }
            return in_array('delete_contact', json_decode($role->permissions));
        });

        //Gallery

        Gate::define('add-gallery', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_gallery', $merger);
            }
            return in_array('add_gallery', json_decode($role->permissions));
        });

        Gate::define('view-gallery', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_gallery', $merger);
            }
            return in_array('view_gallery', json_decode($role->permissions));
        });

        Gate::define('update-gallery', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_gallery', $merger);
            }
            return in_array('update_gallery', json_decode($role->permissions));
        });

        Gate::define('update-gallery-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_gallery_page', $merger);
            }
            return in_array('update_gallery_page', json_decode($role->permissions));
        });


        Gate::define('delete-gallery', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_gallery', $merger);
            }
            return in_array('delete_gallery', json_decode($role->permissions));
        });

        //Events

        Gate::define('add-events', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_events', $merger);
            }
            return in_array('add_events', json_decode($role->permissions));
        });

        Gate::define('view-events', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_events', $merger);
            }
            return in_array('view_events', json_decode($role->permissions));
        });

        Gate::define('update-events', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_events', $merger);
            }
            return in_array('update_events', json_decode($role->permissions));
        });

        Gate::define('update-events-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_events_page', $merger);
            }
            return in_array('update_events_page', json_decode($role->permissions));
        });

        Gate::define('delete-events', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_events', $merger);
            }
            return in_array('delete_events', json_decode($role->permissions));
        });

        //Hotel Rooms

        Gate::define('add-hotel-rooms', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_hotel_rooms', $merger);
            }
            return in_array('add_hotel_rooms', json_decode($role->permissions));
        });

        Gate::define('view-hotel-rooms', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_hotel_rooms', $merger);
            }
            return in_array('view_hotel_rooms', json_decode($role->permissions));
        });

        Gate::define('update-hotel-rooms-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_hotel_rooms_page', $merger);
            }
            return in_array('update_hotel_rooms_page', json_decode($role->permissions));
        });

        Gate::define('update-hotel-rooms', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_hotel_rooms', $merger);
            }
            return in_array('update_hotel_rooms', json_decode($role->permissions));
        });

        Gate::define('delete-hotel-rooms', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_hotel_rooms', $merger);
            }
            return in_array('delete_hotel_rooms', json_decode($role->permissions));
        });

        //Hotel Staffs

        Gate::define('add-hotel-staffs', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_hotel_staffs', $merger);
            }
            return in_array('add_hotel_staffs', json_decode($role->permissions));
        });

        Gate::define('view-hotel-staffs', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_hotel_staffs', $merger);
            }
            return in_array('view_hotel_staffs', json_decode($role->permissions));
        });

        Gate::define('update-hotel-staffs', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_hotel_staffs', $merger);
            }
            return in_array('update_hotel_staffs', json_decode($role->permissions));
        });

        Gate::define('update-hotel-staff-page', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_hotel_staff_page', $merger);
            }
            return in_array('update_hotel_staff_page', json_decode($role->permissions));
        });

        Gate::define('delete-hotel-staffs', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_hotel_staffs', $merger);
            }
            return in_array('delete_hotel_staffs', json_decode($role->permissions));
        });


        //Manage Permssions 
        Gate::define('add-manage-permissions', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_manage_permissions', $merger);
            }
            return in_array('add_manage_permissions', json_decode($role->permissions));
        });

        Gate::define('view-manage-permissions', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_manage_permissions', $merger);
            }
            return in_array('view_manage_permissions', json_decode($role->permissions));
        });

        Gate::define('update-manage-permissions', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_manage_permissions', $merger);
            }
            return in_array('update_manage_permissions', json_decode($role->permissions));
        });

        Gate::define('delete-manage-permissions', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_manage_permissions', $merger);
            }
            return in_array('delete_manage_permissions', json_decode($role->permissions));
        });

        //Manage Roles 
        Gate::define('add-manage-roles', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_manage_roles', $merger);
            }
            return in_array('add_manage_roles', json_decode($role->permissions));
        });

        Gate::define('view-manage-roles', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_manage_roles', $merger);
            }
            return in_array('view_manage_roles', json_decode($role->permissions));
        });

        Gate::define('update-manage-roles', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_manage_roles', $merger);
            }
            return in_array('update_manage_roles', json_decode($role->permissions));
        });

        Gate::define('delete-manage-roles', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_manage_roles', $merger);
            }
            return in_array('delete_manage_roles', json_decode($role->permissions));
        });


        //Manage Roles 
        Gate::define('add-site-setting', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_site_setting', $merger);
            }
            return in_array('add_site_setting', json_decode($role->permissions));
        });

        Gate::define('view-site-setting', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_site_setting', $merger);
            }
            return in_array('view_site_setting', json_decode($role->permissions));
        });

        Gate::define('update-site-setting', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_site_setting', $merger);
            }
            return in_array('update_site_setting', json_decode($role->permissions));
        });

        Gate::define('delete-site-setting', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_site_setting', $merger);
            }
            return in_array('delete_site_setting', json_decode($role->permissions));
        });

        //Sliders

        Gate::define('add-sliders', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('add_sliders', $merger);
            }
            return in_array('add_sliders', json_decode($role->permissions));
        });

        Gate::define('view-sliders', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('view_sliders', $merger);
            }
            return in_array('view_sliders', json_decode($role->permissions));
        });

        Gate::define('update-sliders', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('update_sliders', $merger);
            }
            return in_array('update_sliders', json_decode($role->permissions));
        });

        Gate::define('delete-sliders', function ($user) {
            $role = Role::where('id', $user->role_id)->first();

            if (!is_null($user->extra_permissions)) {
                $merger = array_unique(array_merge(json_decode($user->extra_permissions), json_decode($role->permissions)));
                return in_array('delete_sliders', $merger);
            }
            return in_array('delete_sliders', json_decode($role->permissions));
        });


        
    }
}