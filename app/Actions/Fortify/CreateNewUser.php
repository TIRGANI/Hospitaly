<?php

namespace App\Actions\Fortify;

use App\Mail\patientvalidationMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => $input['role_id'],
            'specialite_id' => $input['specialite_id'],
            'region_ville' => $input['region_ville'],
            'tarif' => $input['tarif'],
            'phone' => $input['phone'],
            'CIN' => $input['CIN'],
            'Getsion_RDV' =>1,
            'Gestion_Calendrier' =>1,
            'personnaliser_ajonda' =>1,
            'gestion_Assistants'=>1,
        ]);

    }
}
