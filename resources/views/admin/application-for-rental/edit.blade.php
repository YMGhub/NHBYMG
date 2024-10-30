<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application for Rental') }}
        </h2>
    </x-slot>

    <div class="py-12 containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg dark:text-gray-200"
                    style="   overflow-x: auto;">

                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>APPLICANT: Mr. Miss. Mrs.: </strong><br>
                                {{ $submission['applicant_surname'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Applicant First:</strong><br>
                                {{ $submission['applicant_first'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Applicant Middle:</strong><br>
                                {{ $submission['applicant_middle'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Applicant Address:</strong><br>
                                {{ $submission['applicant_address'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>Co-Applicant: Mr. Miss. Mrs.: </strong><br>
                                {{ $submission['co_applicant_surname'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Co-Applicant First:</strong><br>
                                {{ $submission['co_applicant_name'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Co-Applicant Middle:</strong><br>
                                {{ $submission['co_applicant_middle'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Co-Applicant Address:</strong><br>
                                {{ $submission['co_applicant_address'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>NATIONAL REGISTRATION NUMBER: </strong><br>
                                {{ $submission['national_registration_number'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>EMPLOYER:</strong><br>
                                {{ $submission['employer'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>OCCUPATION:</strong><br>
                                {{ $submission['employer'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>CITIZENSHIP: </strong><br>
                                {{ $submission['citizenship'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>TELEPHONE:</strong><br>
                                {{ $submission['telephone'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>INCOME:</strong><br>
                                {{ $submission['income'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>SIZE OF FAMILY: </strong><br>
                                {{ $submission['size_of_family'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>ADULT:</strong><br>
                                {{ $submission['adults'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>CHILDREN:</strong><br>
                                {{ $submission['children'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?: </strong><br>
                                {{ $submission['own_landorproperty'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>IF YES, PLEASE STATE ADDRESS:</strong><br>
                                {{ $submission['state_address'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?:</strong><br>
                                {{ $submission['financial_institution'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?: </strong><br>
                                {{ $submission['own_landorproperty'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>IF YES, PLEASE STATE ADDRESS:</strong><br>
                                {{ $submission['state_address'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?:</strong><br>
                                {{ $submission['financial_institution'] }}
                            </p>
                        </div>

                    </div>



                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>IF YES, PLEASE GIVE DETAILS :</strong><br>
                                {{ $submission['give_details'] }}
                            </p>
                        </div>

                        <div>

                            <p>
                                <strong>HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?</strong><br>
                                {{ $submission['occupedaunit'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>PHOTOGRAPH </strong><br>
                                <img style="width:200px" src="{{ asset('storage/' . $submission['photograph']) }}" </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>INFORMATION ON INTENDED OCCUPANTS: </strong><br>
                            <table class="w-full border border-gray-200 text-center">
                                <thead class="bg-gray-100 border-b">
                                    <tr class="text-gray-500">
                                        <th>NAME</th>
                                        <th>RELATION</th>
                                        <th>AGE</th>
                                        <th>OCCUPATION/ SCHOOL</th>
                                        <th>INCOME</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore']) as $item)
                                        <tr>
                                            <td>{{ $item->name_occupant }}</td>
                                            <td>{{ $item->relation_occupant }}</td>
                                            <td>{{ $item->age_accupant }}</td>
                                            <td>{{ $item->occupation_school_occupant }}</td>
                                            <td>{{ $item->income_occupant }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>
                            <h2 class="text-center headline margin-top-35 margin-bottom-35">
                                FOR OFFICIAL USE</h2>

                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>IS APPLICANT A TENANT OR LODGER? </strong><br>
                                {{ $submission['tenantorlodger'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>NAME AND ADDRESS OF LANDLORD</strong><br>
                                {{ $submission['addressoflandlord'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> DATE OF OCCUPATION OF PRESENT ACCOMMODATION </strong><br>
                                {{ $submission['present_accommodation'] }}
                            </p>

                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>STRUCTURE OF HOUSE </strong><br>
                                {{ $submission['structureofhouse'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>RENTAL RATE</strong><br>
                                {{ $submission['rental_date'] }}
                            </p>

                        </div>
                        <div>



                        </div>



                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>TYPE OF SANITARY FACILITIES </strong><br>
                                {{ $submission['typeofsanityfacilities'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>WATER SUPPLY</strong><br>
                                {{ $submission['water_supply'] }}
                            </p>

                        </div>
                        <div>



                        </div>



                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>OUSING OFFICER’S COMMENTS </strong><br>
                                {{ $submission['housingofficercomments'] }}
                            </p>

                        </div>

                        <div>



                        </div>
                        <div>



                        </div>



                    </div>


                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>ACKNOWLEDGED THIS</strong><br>
                                {{ $submission['acknowledged'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>Day Of</strong><br>
                                {{ $submission['dayof'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> YEAR </strong><br>
                                {{ $submission['year'] }}
                            </p>

                        </div>


                        <div>

                            <p>
                                <strong> By </strong><br>
                                {{ $submission['by'] }}
                            </p>

                        </div>
                    </div>



                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>KEYS RECEIVED BY</strong><br>
                                {{ $submission['keysreceived'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>THIS</strong><br>
                                {{ $submission['thiskeys'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> DAY OF </strong><br>
                                {{ $submission['dayofkeys'] }}
                            </p>

                        </div>


                        <div>

                            <p>
                                <strong> Year OF </strong><br>
                                {{ $submission['yearkeys'] }}
                            </p>

                        </div>
                    </div>

                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>WITNESSED BY</strong><br>
                                {{ $submission['whitnessed'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>THIS</strong><br>
                                {{ $submission['thiswhitnessed'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> DAY OF </strong><br>
                                {{ $submission['dayofwhitnessed'] }}
                            </p>

                        </div>


                        <div>

                            <p>
                                <strong> Year OF </strong><br>
                                {{ $submission['yearwhitnessed'] }}
                            </p>

                        </div>
                    </div>


                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>HOUSING OFFICER / ASST. HOUSING OFFICER</strong><br>
                                {{ $submission['housingofficer'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>SIGNATURE(S)</strong><br>
                                {{ $submission['signatures'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> DATED THIS </strong><br>
                                {{ $submission['dayofdatedthis'] }}
                            </p>

                        </div>


                        <div>

                            <p>
                                <strong> Year OF </strong><br>
                                {{ $submission['yeardatedthis'] }}
                            </p>

                        </div>
                    </div>











                </div>


            </div>
        </div>

    </div>
</x-app-layout>
