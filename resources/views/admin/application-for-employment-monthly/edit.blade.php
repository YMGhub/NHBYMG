<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For Employment Monthly') }}
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
                                <strong>1. APPLICATION FOR THE POST OF: </strong><br>
                                {{ $submission['application_for_the_post'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>SURNAME:</strong><br>
                                {{ $submission['surname'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>3.  CHRISTIAN NAMES:</strong><br>
                                {{ $submission['christian_names'] }}
                            </p>
                        </div>


                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>4.  PERMANENT ADDRESS:</strong><br>
                                {{ $submission['permanent_address'] }}
                            </p>
                        </div>

                        <div>

                            <p>
                                <strong>5.   TELEPHONE NO.: </strong><br>
                                {{ $submission['telephone_no'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>6.   DATE OF BIRTH:</strong><br>
                                {{ $submission['date_of_birth'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>7.   NATIONALITY:</strong><br>
                                {{ $submission['national_registration_no'] }}
                            </p>
                        </div>
                        <div>

                            <p>
                                <strong>8.   NATIONAL REGISTRATION NO.:</strong><br>
                                {{ $submission['national_insurance_no'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>9. NATIONAL INSURANCE NO.: </strong><br>
                                {{ $submission['national_insurance_no'] }}
                            </p>

                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>TERTIARY </strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <th>EDUCATION </th>
                                    <th>SCHOOL/COLLEGE/UNIVERSITY </th>
                                    <th>FROM</th>
                                    <th>TO</th>
                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore1']) as $item)
                                        <tr>
                                            <td>{{ $item->education_tertiary }}</td>
                                            <td>{{ $item->school_collage_university_tertiary }}</td>
                                            <td>{{ $item->from_tertiary }}</td>
                                            <td>{{ $item->to_tertiary }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>SECONDARY </strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <th>EDUCATION </th>
                                    <th>SCHOOL/COLLEGE/UNIVERSITY </th>
                                    <th>FROM</th>
                                    <th>TO</th>
                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore2']) as $item)
                                        <tr>
                                            <td>{{ $item->education_secondary }}</td>
                                            <td>{{ $item->school_collage_university_secondary }}</td>
                                            <td>{{ $item->from_secondary }}</td>
                                            <td>{{ $item->to_secondary }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>PRIMARY </strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <th>EDUCATION </th>
                                    <th>SCHOOL/COLLEGE/UNIVERSITY </th>
                                    <th>FROM</th>
                                    <th>TO</th>
                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore3']) as $item)
                                        <tr>
                                            <td>{{ $item->education_primary }}</td>
                                            <td>{{ $item->school_collage_university_primary }}</td>
                                            <td>{{ $item->from_primary }}</td>
                                            <td>{{ $item->to_primary }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>11. QUALIFICATIONS: </b><br>(IN REVERSE CHRONOGICAL ORDER) </strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <th>SUBJECTS/COURSES </th>
                                    <th>LEVEL</th>
                                    <th>YEAR </th>
                                    <th>EXAMINING BODY </th>
                                    <th>GRADES</th>
                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore4']) as $item)
                                        <tr>
                                            <td>{{ $item->subject_courses }}</td>
                                            <td>{{ $item->level }}</td>
                                            <td>{{ $item->year }}</td>
                                            <td>{{ $item->examining_body }}</td>
                                            <td>{{ $item->grades }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>12. HISTORY OF EMPLOYMENT: </b><br>(IN REVERSE CHRONOGICAL ORDER) </strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>

                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <th>EMPLOYER </th>
                                    <th>POST HELD</th>
                                    <th>FROM </th>
                                    <th>TO</th>
                                </thead>

                                <tbody>
                                    @foreach (json_decode($submission['addmore5']) as $item)
                                        <tr>
                                            <td>{{ $item->employer }}</td>
                                            <td>{{ $item->post_held }}</td>
                                            <td>{{ $item->from }}</td>
                                            <td>{{ $item->to }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>13. PERSONNEL REFERENCES :</strong><br>
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>NAME</strong><br>
                                {{ $submission['name_personal_1'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>ADDRESS</strong><br>
                                {{ $submission['address_personal_1'] }}
                            </p>

                        </div>
                        <div>
                            <p>
                                <strong> OCCUPATION </strong><br>
                                {{ $submission['occupation_personal_1'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong> LENGTH OF TIME KNOWN </strong><br>
                                {{ $submission['length_personal_1'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>NAME</strong><br>
                                {{ $submission['name_personal_2'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>ADDRESS</strong><br>
                                {{ $submission['address_personal_2'] }}
                            </p>

                        </div>
                        <div>
                            <p>
                                <strong> OCCUPATION </strong><br>
                                {{ $submission['occupation_personal_2'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong> LENGTH OF TIME KNOWN </strong><br>
                                {{ $submission['length_personal_2'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>14. TESTIMONIALS (TO BE PRESENTED ON REQUEST)</strong><br>
                                {{ $submission['any_other_information'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>SIGNATURE</strong><br>
                                {{ $submission['signature'] }}
                            </p>
                        </div>

                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-1 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>DATE</strong><br>
                                {{ $submission['date'] }}
                            </p>
                        </div>

                    </div>










                    <div>
                        @if ($submission->status == 1)
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
                        @if ($submission->status == 0)
                            <form
                                action="{{ route('admin.application-for-employment-weekly.update', $submission->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <br>
                                <input value="{{ $submission->id }}" name="id_submission_for_employment_monthly"
                                    id="id_submission_for_employment_monthly" type="hidden">

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="checkbox" id="status" name="status"
                                        {{ $submission->status ? 'checked' : '' }}>
                                </div>
                                <br>

                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                                    Save
                                </button>
                            </form>
                        @endif
                        <br>
                        <br>



                    </div>




                </div>


            </div>
        </div>

    </div>
</x-app-layout>
