<footer class="page-footer font-small indigo">
    <div class="container text-center text-md-left">
        <div class="row">
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Latest Version</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('version.index') }}">0.0.2</a>
                    </li>
                    <li>
                        <a href="{{ route('license') }}">License</a>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Latest Modification</h5>
                <ul class="list-unstyled">
                    <li>
                        12/07/2019
                        {{-- This will be extracted from github api next time --}}
                    </li>
                    <li>
                        <a href="mailto:labreportrepository_1465564000000027769@bugs.zohoprojects.com">Report Bug</a>
                        {{-- This is not quite working !!
                        Report bug is bugged.. Oh The Irony !!! --}}
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Documentation</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('overview') }}">Overview</a>
                    </li>
                    <li>
                        <a href="{{ route('manual_Index') }}">User Manual</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="{{ route('license') }}">Lab Report Repository</a>
    </div>
</footer>
