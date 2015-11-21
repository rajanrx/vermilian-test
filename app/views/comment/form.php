<div class="row">

    <div class="col-sm-8 col-sm-offset-2">

        <form id="contact-form" role="form">
            <div class="ajax-hidden">
                <div class="form-group" >
                    <label class="sr-only" for="c_name">Name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                </div>

                <div class="form-group" >
                    <label class="sr-only" for="c_email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="comment" name="comment" rows="7" placeholder="Comment"></textarea>
                </div>

                <button type="submit" id="js-add-new-comment" class="btn btn-lg btn-block  fadeInUp animated"  >Add Comment </button>
            </div>
            <div class="js-add-new-ajax-response"></div>
        </form>

    </div>

</div>
