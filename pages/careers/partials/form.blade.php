<form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="career_id" value="{{ $career->id }}">

    <div class="row pt-5">

        <div class="col-lg-3 mb-4">
            <div class="ngfhd">
                <h6>Name <span style="color: red;">*</span></h6>
            </div>
        </div>

        <div class="col-lg-9 mb-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rightgfdhg">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rightgfdhg">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $fields = [
            ['name' => 'phone', 'label' => 'Phone Number', 'placeholder' => 'Phone Number'],
            ['name' => 'current_organization', 'label' => 'Current Organization', 'placeholder' => 'If fresher type NA'],
            ['name' => 'current_industry', 'label' => 'Current Industry', 'placeholder' => 'If fresher type NA'],
            ['name' => 'experience', 'label' => 'Experience', 'placeholder' => 'Experience in Years'],
            ['name' => 'current_ctc', 'label' => 'Current CTC', 'placeholder' => 'Current CTC'],
            ['name' => 'expected_ctc', 'label' => 'Expected CTC', 'placeholder' => 'Expected CTC'],
            ['name' => 'notice_period', 'label' => 'Notice Period', 'placeholder' => 'Days']
        ];
    @endphp

    @foreach ($fields as $field)
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="ngfhd">
                    <h6>{{ $field['label'] }} <span style="color: red;">*</span></h6>
                </div>
            </div>

            <div class="col-lg-9 mb-4">
                <div class="rightgfdhg">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}" value="{{ old($field['name']) }}">
                        @error($field['name'])
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="ngfhd">
                <h6>Upload Resume <span style="color: red;">*</span></h6>
            </div>
        </div>

        <div class="col-lg-9 mb-4">
            <div class="rightgfdhg">
                <div class="mb-3">
                    <div class="costum-file-internal">
                        <input type="file" name="resume" accept=".pdf">
                    </div>
                    @error('resume')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <p class="pt-2 hhhhhvv">(File size should be <=2 MB, supported file type as .PDF)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-center">
            <button type="submit" class="mt-5 s-c-r-internall btn btn-primary">Submit</button>
        </div>
    </div>
</form>
