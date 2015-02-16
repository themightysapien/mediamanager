<script src="{{ asset('vendor/themighty/mediamanager/assets/lib/angular/angular.min.js') }}"></script>
<script src="{{ asset('vendor/themighty/mediamanager/assets/lib/angular-ui-router/angular-ui-router.js') }}"></script>
<script src="{{ asset('vendor/themighty/mediamanager/assets/js/app.js') }}"></script>

<div ng-app="mediaManager" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Media Manager</h4>
            </div>
            <div class="modal-body">
                <div ui-view></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
