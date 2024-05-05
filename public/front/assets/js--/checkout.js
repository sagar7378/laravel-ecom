$(document).ready(function () {
    $('#paymentForm').submit(function (event) {
        event.preventDefault(); // Stop the form from submitting traditionally

        var amount = $('#amount').val();
        // alert(amount);return false;

        // Validate amount as a number
        if (isNaN(amount) || amount <= 0) {
            alert('Invalid amount. Please enter a valid number.');
            return;
        }

        // Convert amount to paise
        // amount = Math.round(parseFloat(amount) * 100);

        $.ajax({
            type: 'get',
            url: $(this).attr('action'),
            data: {amount: amount},
            dataType: 'json',
            success: function (data) {
                var options = {
                    "key": "{{ env('RAZORPAY_KEY_ID') }}",
                    "amount": (amount*100),
                    "currency": data.currency,
                    "name": "Foodie Point",
                    "description": "Payment for Order",
                    "order_id": data.id,
                    "handler": function (response){
                        // Handle the success callback
                        console.log(response);
                        location.reload();

                    },
                    "prefill": {
                        "name": "Sagar prajapt",
                        "email": "sagarprajapt250@gmail.com",
                        "contact": "7378159185"
                    },
                    "notes": {
                        "address": "2 jagdish vihar goner road,jaipur"
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                $("#error_msg").show();
                $("#error_msg").addClass(data.alert_class);
                $("#error_msg").text(data.message);

                var rzp = new Razorpay(options);
                rzp.open();
            },
            error: function (xhr, status, error) {
                console.error(error);
                alert('Error initiating payment. Please try again.');
            }
        });
    });
});