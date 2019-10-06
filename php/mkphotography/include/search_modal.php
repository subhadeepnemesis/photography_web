<div class="top-search-area">
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Close -->
                    <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                    <!-- Form -->
                    <!-- <form action="#" method=""> -->
                        <input type="text" id="testimonial_title" class="form-control" value="" readonly>
                        <textarea id="testimonial_desc" class="form-control" rows="10" cols="20" readonly></textarea>
                        <!-- <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter..."> -->
                        <!-- <button type="submit">Search</button> -->
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .close-btn {
      border: none;
      color: white;
    }

    .close-btn:hover {
      color: red;
    }

    .modal-body {
        background-image: url('img/core-img/bg_1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 400px;
    }

    #testimonial_title
    {
        font-size: x-large; 
        font-weight:Bold;
        font-family: cursive;
        text-transform: capitalize;
    }

    #testimonial_desc
    {
        resize: none;
        overflow-y: scroll;
    }
</style>