 {{-- <div class="inner-head-wrap">
    <ul class="inner-head">
        <a href="{{ route('view') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-1">View</li>
        </a>
        <div class="dropdown">
            <button class="btn link dropdown-toggle drop-down-btn inner-list-2" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">Print </button>
            <ul class="dropdown-menu drp-menu p-0" style="">
                <li>
                    <a class="text-decoration-none" href=""><div class="d-flex gap-3 align-items-center"><i class="fa-solid fa-receipt"></i> Assignment </div> </a>
                </li>
                <li>
                    <a class="text-decoration-none" href=""><div class="d-flex gap-3 align-items-center"><i class="fa-regular fa-envelope"></i> Contact Letter</div> </a>
                </li>
                <li>
                    <a class="text-decoration-none" href=""><div class="d-flex gap-3 align-items-center"><i class="fa-regular fa-envelope"></i>  CAT Letter </div></a>
                </li>
                <li>
                    <a class="text-decoration-none" href=""><div class="d-flex gap-3 align-items-center"><i class="fa-regular fa-envelope"></i> Acknowledgement </div></a>
                </li>
            </ul>
        </div>
        <a href="{{ route('reject') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-3">Reject</li>
        </a>
        <a href="{{ route('reopen') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-4">Re-Open </li>
        </a>
        <a href="{{ route('messagePg') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-5">Messages</li>
        </a>
        <div class="dropdown">
            <button class="btn link dropdown-toggle drop-down-btn inner-list-6" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">Files </button>
            <ul class="dropdown-menu drp-menu p-0" style="">

                <a class="text-decoration-none" href="{{ route('docs') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Docs</li>
                </a>


                <a class="text-decoration-none" href="{{ route('renamefile') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-image"></i>Label Files</li>
                </a>


                <a class="text-decoration-none" href="{{ route('emsUpload') }}">
                    <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-receipt"></i> Import Estimates EMS</li>
                </a>

            </ul>
        </div>
        <a href="{{ route('dashboard') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-7">Downloads CSV</li>
        </a>
        <a href="{{ route('changephase') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-8">Change Phase</li>
        </a>
        <a href="{{ route('completAssign') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-9">Send / Complete</li>
        </a>
        <div class="dropdown">
            <button class="btn link dropdown-toggle drop-down-btn inner-list-10" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">Reports</button>
            <ul class="dropdown-menu drp-menu p-0" style="">

                <a class="text-decoration-none" href="{{ route('appraiseReport') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Appraisal Report</li>
                </a>

                <a class="text-decoration-none" href="{{ route('lossReport') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Total Loss Summary</li>
                </a>
                <a class="text-decoration-none" href="{{ route('acvWork') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> ACV Worksheet</li>
                </a>
                <a class="text-decoration-none" href="{{ route('conditionsumm') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Condition Summary</li>
                </a>
                <a class="text-decoration-none" href="{{ route('vehicalsumm') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Vehicle Option Summary</li>
                </a>
                <a class="text-decoration-none" href="{{ route('salvagebid') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Salvage Bids</li>
                </a>
                <a class="text-decoration-none" href="{{ route('conditionreport') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i> Condition Reports</li>
                </a>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn link dropdown-toggle drop-down-btn inner-list-11 p-0" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">Client Docs & <br> Guideliness</button>
            <ul class="dropdown-menu drp-menu p-0" style="">
                <a class="text-decoration-none" href="{{ route('clientappraisal') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Appraisal Report </li></a>
                <a class="text-decoration-none" href="{{ route('totLoss') }}">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Total Loss </li></a>
                <a class="text-decoration-none" href="{{ route('photosOnly') }} ">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Photos Only </li></a>
                <a class="text-decoration-none" href="{{ route('propertyreport') }} ">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Property Report </li></a>
                <a class="text-decoration-none" href="{{ route('suppayreq') }} ">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Supp Pay Req Summary </li></a>
                <a class="text-decoration-none" href="{{ route('propsuppsummary') }} ">
                    <li class="d-flex align-items-center gap-3"><i class="fa-solid fa-receipt"></i>Property Supp Sumamry </li></a>
            </ul>
        </div>
    </ul>
</div> --}}

@props([
    'assignment'
])


<div class="inner-head-wrap2">
    <ul class="inner-head2">
        <a href="{{ route('reject',$assignment) }}" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Accept / </br> Reject Assignments</li>
        </a>
        <a href="#" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Print Assignment</li>
        </a>
        <a href="{{ route('messagePg') }}" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Messages</li>
        </a>
        <a href="{{ route('docs',$assignment) }}" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Upload Files</li>
        </a>
        <a href="{{ route('changephase',$assignment) }}" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Change Phase</li>
        </a>
        <a href="#" class="link text-decoration-none">
            <li class="inner-list inner-list-1">Repairable / </br> Total Loss</li>
        </a>
    </ul>
</div>
