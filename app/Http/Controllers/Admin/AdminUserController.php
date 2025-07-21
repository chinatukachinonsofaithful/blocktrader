<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\CopyExpert;
use PhpParser\Node\Expr\Empty_;

use function PHPUnit\Framework\isEmpty;

class AdminUserController extends Controller
{
    // Display the user list
    public function index()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        $page_title = "User";
        $CopyExpert = CopyExpert::all();
        $users = User::whereIn('role_id', ['1'])->orderBy('id', 'desc')->paginate(10); // Fetch users with pagination
        return view('admin.users.index', compact('users', 'page_title', 'CopyExpert'));
    }

    public function kycindex()
    {

        if (Auth::user()->role_id >= 2) {
        } else {
            return redirect()->intended('user/dashboard');
        }
        $page_title = "Kyc";

        $userskyc = User::whereNotIn('kyc_status', [2, 3])
            ->orderBy('id', 'desc') // Order before paginating
            ->paginate(10);


        return view('admin.users.kyc', compact('userskyc', 'page_title'));
    }

    // Show the form for creating a new user
    public function create()
    {
        $page_title = "Create New User";
        $CopyExpert = CopyExpert::all();
        return view('admin.users.create', compact('page_title', 'CopyExpert'));
    }

    // Store a newly created user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'country' => 'required',
            // 'copy_expert_id' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'kyc_status' => 'required', // Ensure kyc_status has a valid value
        ]);

        $refid = Str::random(8);
        // Create the user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'balance' => $request->balance,
            'refid' => $refid,
            'country' => $request->country,
            // 'copy_expert_id' => $request->copy_expert_id,
            'password' => Hash::make($validated['password']), // Use Hash facade to hash the password
            'kyc_status' => $validated['kyc_status'],
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Show the form for editing the specified user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $countries = [
            'Afghanistan',
            'Albania',
            'Algeria',
            'American Samoa',
            'Andorra',
            'Angola',
            'Anguilla',
            'Antarctica',
            'Argentina',
            'Armenia',
            'Aruba',
            'Australia',
            'Austria',
            'Azerbaijan',
            'Bahamas',
            'Bahrain',
            'Bangladesh',
            'Barbados',
            'Belarus',
            'Belgium',
            'Belize',
            'Benin',
            'Bermuda',
            'Bhutan',
            'Bolivia',
            'Bosnia and Herzegovina',
            'Botswana',
            'Bouvet Island',
            'Brazil',
            'British Indian Ocean Territory',
            'Brunei Darussalam',
            'Bulgaria',
            'Burkina Faso',
            'Burundi',
            'Cambodia',
            'Cameroon',
            'Canada',
            'Cape Verde',
            'Cayman Islands',
            'Central African Republic',
            'Chad',
            'Chile',
            'China',
            'Christmas Island',
            'Cocos (Keeling) Islands',
            'Colombia',
            'Comoros',
            'Congo',
            'Congo, Democratic Republic of the',
            'Cook Islands',
            'Costa Rica',
            'Croatia',
            'Cuba',
            'Cyprus',
            'Czech Republic',
            'Côte d\'Ivoire',
            'Denmark',
            'Djibouti',
            'Dominica',
            'Dominican Republic',
            'Ecuador',
            'Egypt',
            'El Salvador',
            'Equatorial Guinea',
            'Eritrea',
            'Estonia',
            'Ethiopia',
            'Falkland Islands (Malvinas)',
            'Faroe Islands',
            'Fiji',
            'Finland',
            'France',
            'French Guiana',
            'French Polynesia',
            'French Southern Territories',
            'Gabon',
            'Gambia',
            'Georgia',
            'Germany',
            'Ghana',
            'Gibraltar',
            'Greece',
            'Greenland',
            'Grenada',
            'Guadeloupe',
            'Guam',
            'Guatemala',
            'Guernsey',
            'Guinea',
            'Guinea-Bissau',
            'Guyana',
            'Haiti',
            'Heard Island and McDonald Islands',
            'Honduras',
            'Hong Kong',
            'Hungary',
            'Iceland',
            'India',
            'Indonesia',
            'Iran',
            'Iraq',
            'Ireland',
            'Israel',
            'Italy',
            'Jamaica',
            'Japan',
            'Jersey',
            'Jordan',
            'Kazakhstan',
            'Kenya',
            'Kiribati',
            'Kuwait',
            'Kyrgyzstan',
            'Lao People\'s Democratic Republic',
            'Latvia',
            'Lebanon',
            'Lesotho',
            'Liberia',
            'Libya',
            'Liechtenstein',
            'Lithuania',
            'Luxembourg',
            'Macao',
            'North Macedonia',
            'Madagascar',
            'Malawi',
            'Malaysia',
            'Maldives',
            'Mali',
            'Malta',
            'Marshall Islands',
            'Martinique',
            'Mauritania',
            'Mauritius',
            'Mayotte',
            'Mexico',
            'Micronesia (Federated States of)',
            'Moldova',
            'Monaco',
            'Mongolia',
            'Montenegro',
            'Montserrat',
            'Morocco',
            'Mozambique',
            'Myanmar',
            'Namibia',
            'Nauru',
            'Nepal',
            'Netherlands',
            'New Caledonia',
            'New Zealand',
            'Nicaragua',
            'Niger',
            'Nigeria',
            'Niue',
            'Norfolk Island',
            'North Korea',
            'Northern Mariana Islands',
            'Norway',
            'Oman',
            'Pakistan',
            'Palau',
            'Panama',
            'Papua New Guinea',
            'Paraguay',
            'Peru',
            'Philippines',
            'Pitcairn',
            'Poland',
            'Portugal',
            'Puerto Rico',
            'Qatar',
            'Réunion',
            'Romania',
            'Russian Federation',
            'Rwanda',
            'Saint Barthélemy',
            'Saint Helena, Ascension and Tristan da Cunha',
            'Saint Kitts and Nevis',
            'Saint Lucia',
            'Saint Martin (French part)',
            'Saint Pierre and Miquelon',
            'Saint Vincent and the Grenadines',
            'Samoa',
            'San Marino',
            'Sao Tome and Principe',
            'Saudi Arabia',
            'Senegal',
            'Serbia',
            'Seychelles',
            'Sierra Leone',
            'Singapore',
            'Slovakia',
            'Slovenia',
            'Solomon Islands',
            'Somalia',
            'South Africa',
            'South Georgia and the South Sandwich Islands',
            'South Korea',
            'Spain',
            'Sri Lanka',
            'Sudan',
            'Suriname',
            'Svalbard and Jan Mayen',
            'Swaziland',
            'Sweden',
            'Switzerland',
            'Syrian Arab Republic',
            'Taiwan, Province of China',
            'Tajikistan',
            'Tanzania, United Republic of',
            'Thailand',
            'Timor-Leste',
            'Togo',
            'Tokelau',
            'Tonga',
            'Trinidad and Tobago',
            'Tunisia',
            'Turkey',
            'Turkmenistan',
            'Turks and Caicos Islands',
            'Tuvalu',
            'Uganda',
            'Ukraine',
            'United Arab Emirates',
            'United Kingdom',
            'United States',
            'Uruguay',
            'Uzbekistan',
            'Vanuatu',
            'Vatican City',
            'Venezuela',
            'Viet Nam',
            'Wallis and Futuna',
            'Western Sahara',
            'Yemen',
            'Zambia',
            'Zimbabwe'
        ];

        $selectedCountry = old('country', $user->country);
        $CopyExpert = CopyExpert::all();

        $page_title = "$user->name";

        $currentCopyExpert = $user->copyExpert ? $user->copyExpert->profile_name : 'No Copy Expert Assigned';

        return view('admin.users.edit', compact('user', 'page_title', 'countries', 'selectedCountry', 'CopyExpert', 'currentCopyExpert'));
    }

    // Update the specified user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'kyc_status' => 'required',
        ]);


            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = $validated['password'] ? bcrypt($validated['password']) : $user->password;
            $user->role_id = $request->role_id;
            $user->phone = $request->phone;
            $user->balance = $request->balance;
            $user->country = $request->country;
            $user->copy_expert_id = $request->copy_expert_id;
            $user->kyc_status = $request->kyc_status;

            // Save the user
            $user->save();
       


        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }




    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            $user = User::findOrFail($id);

            // Delete related records using relationships
            $user->deposits()->delete();
            $user->withdraws()->delete();
            $user->investments()->delete();

            // Delete the user
            $user->delete();
        });

        return redirect()->route('admin.users.index')->with('success', 'User and all associated data deleted successfully.');
    }
}
