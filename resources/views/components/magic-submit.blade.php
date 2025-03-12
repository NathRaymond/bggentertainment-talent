<script src="assets/js/jquery.min.js"  crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.magicFormSubmit').submit(function(e) {
            e.preventDefault(); // Prevent form submission
            var formData = new FormData(this); // Create FormData object with the form
            var action = $(this).data('nextaction');
            var nextUrl = $(this).data('nexturl');
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                processData: false, // Prevent jQuery from converting FormData into a string
                contentType: false, // Let the browser set the Content-Type, including boundary for FormData
                success: function(response) {
                    // Handle success response
                    thisMessage =response.message?? "Form submitted successfully";
                    new swal("Well done", response.message, 'success');
                    if(action=='reload'){
                        window.location.reload()
                    }else if(action=='anotherurl'){
                        window.location.replace(nextUrl)
                    }                    
                    else{
                        //reload datatable
                        loadPageDatatable();
                        $(this).trigger('reset');
                        $('.btn-close').click();
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    errorMessage = JSON.parse(xhr.responseText);             
                    new swal("Oops", errorMessage.message, 'error');
                    // You can show an error message here
                }
            });
        });
    });
</script>
