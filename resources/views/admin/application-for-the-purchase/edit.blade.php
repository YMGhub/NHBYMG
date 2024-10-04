<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For The Purchase') }}
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

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>Salutation: </strong><br>
                                {{ $submission['salutation'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Surname:</strong><br>
                                {{ $submission['applicant_surname'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>First:</strong><br>
                                {{ $submission['applicant_first'] }}
                            </p>
                        </div>


                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Middle :</strong><br>
                                {{ $submission['applicant_middle'] }}
                            </p>
                        </div>

                        <div>

                            <p>
                                <strong>Maiden Name: </strong><br>
                                {{ $submission['applicant_maiden_name'] }}
                            </p>
                        </div>
                        <div>

                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>National Registration No. </strong><br>
                                {{ $submission['applicant_national_registration_number'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>TAMIS NO. </strong><br>
                                {{ $submission['applicant_tamis_no'] }}
                            </p>
                        </div>
                        <div>

                            <p>
                                <strong>ADDRESS:</strong><br>
                                {{ $submission['applicant_address'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>TELEPHONE NUMBE HOME:</strong><br>
                                {{ $submission['applicant_phone_home'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>TELEPHONE NUMBE WORK:</strong><br>
                                {{ $submission['applicant_phone_work'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>TELEPHONE NUMBE CELL:</strong><br>
                                {{ $submission['applicant_phone_cell'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>EMAIL:</strong><br>
                                {{ $submission['applicant_email'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>MARITAL STATUS:</strong><br>
                                {{ $submission['marital_status'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CITIZENSHIP:</strong><br>
                                {{ $submission['applicant_citizenship'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>COUNTRY OF RESIDENCE:</strong><br>
                                {{ $submission['applicant_country_of_residence'] }}
                            </p>
                        </div>

                        <div>
                            <p>

                            </p>
                        </div>

                        <div>
                            <p>

                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>CO-APPLICANT Salutation:</strong><br>
                                {{ $submission['coapplicant_salutation'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT SURNAME:</strong><br>
                                {{ $submission['coapplicant_surname'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT First Name:</strong><br>
                                {{ $submission['applicant_address'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>CO-APPLICANT Middle name:</strong><br>
                                {{ $submission['coapplicant_middle'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT Maiden name:</strong><br>
                                {{ $submission['coapplicant_maiden_name'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT NATIONAL REGISTRATION NUMBER:</strong><br>
                                {{ $submission['coapplicant_national_registration_number'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>CO-APPLICANT TAMIS NO:</strong><br>
                                {{ $submission['coapplicant_tamis_no'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT ADDRESS:</strong><br>
                                {{ $submission['coapplicant_address'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT DATE OF BIRTH:</strong><br>
                                {{ $submission['coapplicant_date_birth'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>CO-APPLICANT TELEPHONE NUMBE HOME:</strong><br>
                                {{ $submission['coapplicant_phone_home'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT TELEPHONE NUMBE WORK:</strong><br>
                                {{ $submission['coapplicant_phone_work'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>CO-APPLICANT TELEPHONE NUMBE CELL:</strong><br>
                                {{ $submission['coapplicant_phone_cell'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>PERIOD OF EMPLOYMENT Applicant:</strong><br>
                                {{ $submission['applicant_period'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>PERIOD OF EMPLOYMENT Co-Applicant::</strong><br>
                                {{ $submission['co_applicant_period'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>OCCUPATION Applicant:</strong><br>
                                {{ $submission['applicant_occup'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>OCCUPATION Co-Applicant:</strong><br>
                                {{ $submission['co_applicant_occup'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>EMPLOYER Applicant:</strong><br>
                                {{ $submission['applicant_employer'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>EMPLOYER Co-Applicant:</strong><br>
                                {{ $submission['co_applicant_employer'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>SALARY Applicant:</strong><br>
                                {{ $submission['applicant_salary'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>SALARY Co-Applicant:</strong><br>
                                {{ $submission['co_applicant_salary'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>GOVERNMENT:</strong><br>
                                {{ $submission['government'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>PRIVATE:</strong><br>
                                {{ $submission['private'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>SELF:</strong><br>
                                {{ $submission['self'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>MONTHLY:</strong><br>
                                {{ $submission['monthly'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>WEEKLY:</strong><br>
                                {{ $submission['weekly'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>FORT-NIGHTLY:</strong><br>
                                {{ $submission['forth_nightly'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>HOUSE TYPE:</strong><br>
                                {{ $submission['house_type'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>PURCHASING OPTIONS:</strong><br>
                                {{ $submission['purchasing_options'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>PREFERRED HOUSE TYPE:</strong><br>
                                {{ $submission['preferedhousetype'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>NO OF OCCUPANTS:</strong><br>
                                {{ $submission['no_of_occupants'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>CHILDREN’S AGES::</strong><br>
                                {{ $submission['children_ages'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?:</strong><br>
                                {{ $submission['disabilitieswithinthehousehold'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>ALTERNATIVE SOURCES OF INCOME IN HOUSEHOLD: (Maintenance, Alimony, Second Job,
                                    Adults working but not listed on this application etc…):</strong><br>
                                {{ $submission['alternative'] }}
                                {{ $submission['alternative_amount'] }}
                                {{ $submission['alternative1'] }}
                                {{ $submission['alternative_amount2'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Are you currently renting?:</strong><br>
                                {{ $submission['areyourenting'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>If yes, how much is your rent?:</strong><br>
                                {{ $submission['ifyeshowmuch'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>Do you have your own land and wish us to provide you with a Housing
                                    solution?:</strong><br>
                                {{ $submission['yourownland'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Are you a tenant of the land on which you wish to build your Housing
                                    solution?:</strong><br>
                                {{ $submission['tenant'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>(If yes, you MUST have a letter of permission from the
                                    landlord/agent.):</strong><br>
                                {{ $submission['land_or_agent'] }}
                            </p>
                        </div>

                        <div>

                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>FINANCING OF PROPERTY/LAND:</strong><br>

                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>How will you finance the purchase of property / land?:</strong><br>
                                {{ $submission['financethepurchsaseproporty'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>If mortgage or loan, please indicate a potential lending institution of your
                                    choice:</strong><br>
                                {{ $submission['mortgage_or_loan'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>What is the amount of deposit available?:</strong><br>
                                {{ $submission['the_amount_of_deposit'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>APPLICATION FOR HOUSING EVERY LAST PERSON (H.E.L.P)</strong><br>
                                <strong>PREFERRED LOCATION OF LAND/PROPERTY</strong><br>
                                {{ $submission['land_or_property'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Signature(s): Applicant:</strong><br>
                                {{ $submission['signature_applican'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>Co-Applicant:</strong><br>
                                {{ $submission['signature_coapplicant'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>Date::</strong><br>
                                {{ $submission['dateend'] }}
                            </p>
                        </div>

                    </div>



                    <div>
                        @if ($submission->approved == 1)
                            <b>Status:</b>
                            <span
                                style="max-width: 25%;background-color: green; color: white; padding: 5px; border-radius: 5px;">
                                Approved
                            </span>
                        @else
                            <b>Status:</b>
                            <span
                                style="max-width: 25%;background-color: red; color: white; padding: 5px; border-radius: 5px;">
                                Denied
                            </span>
                        @endif
                        <br>
                        {{-- @if ($submission->approved == 0) --}}
                        <form action="{{ route('admin.application-for-the-the-purchase.update', $submission->id) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <br>
                            <input value="{{ $submission->id }}" name="id_submission_for_the_purchase"
                                id="id_submission_for_the_purchase" type="hidden">


                            <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                                <div>
                                    <p>
                                        <strong>FOR OFFICIAL USE ONLY</strong><br>
                                    </p>
                                </div>

                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                                <div>
                                    <p>
                                        <strong>RECOMMENDED BY:</strong><br>
                                        <input name="recommended_by" type="text" placeholder="" />
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <strong>APPROVED:</strong><br>
                                        <input type="checkbox" id="approved" name="approved"
                                            {{ $submission->approved ? 'checked' : '' }}>
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <strong>Date:</strong><br>
                                        <input name="date_official" type="date" placeholder="" />
                                    </p>
                                </div>

                            </div>


                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                                <div>
                                    <p>
                                        <strong>REMARKS:</strong><br>
                                        <input name="remarks_official" type="text" placeholder="" />
                                    </p>
                                </div>

                                <div>
                                    <p>
                                        <strong>QUALIFYING AMOUNT:</strong><br>
                                        <input name="qualifying_amount_official" type="text" placeholder="" />
                                    </p>
                                </div>

                                <div>

                                </div>

                            </div>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                                Save
                            </button>
                        </form>
                        {{-- @endif --}}
                        <br>
                        <br>



                    </div>




                </div>


            </div>
        </div>

    </div>
</x-app-layout>
