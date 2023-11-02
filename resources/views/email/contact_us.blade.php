<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Message Acknowledgment</title>
    <script type="text/javascript">
        function CurrentDate() {
            var today = new Date();
            var options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var formattedDate = today.toLocaleDateString(undefined, options);
            document.getElementById("currentDate").textContent = formattedDate;
        }
    </script>
</head>

<body onload="CurrentDate()">
    <table width="100%" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <tr>
            <td>
                <p>Dear {{ $messageinclude->name }},</p>

                <p>
                    I am writing to acknowledge the receipt of your.
                </p>

                <p>
                    I want to confirm that we have received your message and it is currently under review by the
                    relevant department. We will ensure that your concerns or inquiries are addressed promptly.
                </p>

                <p>
                    We appreciate your communication and thank you for reaching out to us. Your feedback and inquiries
                    are essential in helping us improve our services and meet your expectations.
                </p>

                <p>
                    If you have any further questions or require additional information, please feel free to contact us
                    at +012 345 6789. We aim to respond to your inquiries within Mon - Fri : 09.00 AM - 09.00 PM.
                </p>

                <p>Sincerely,</p>
                <p>Saurabh Paudel<br>Web Developer<br>9876543210,9985746321</p>
            </td>
        </tr>
    </table>
</body>

</html>
