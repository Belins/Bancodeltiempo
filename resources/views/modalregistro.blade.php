
        <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Subscribe</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form3" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form3">Your name</label>
                </div>

                <div class="md-form mb-4">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="form2" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2">Your email</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-indigo">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
            </div>
            </div>
        </div>
        </div>

        <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Launch
            Modal Subscription Form</a>
        </div>