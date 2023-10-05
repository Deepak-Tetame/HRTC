const express = require('express');
const bodyParser = require('body-parser');
const twilio = require('twilio');

const app = express();
const port = process.env.PORT || 5500;

app.use(bodyParser.json());

// Replace with your Twilio credentials
const accountSid = 'ACefe92bded7b42cc8a86229b1b4fb5fe1';
const authToken = '2e40d83f7e5f41c7b9c3d1a87563871c';
const twilioClient = twilio(accountSid, authToken);

// Define an endpoint to handle the SMS sending
app.post('/send-sms', (req, res) => {
    const { message, fromNumber, toNumber } = req.body;

    twilioClient.messages
        .create({
            body: message,
            from: fromNumber,
            to: toNumber,
        })
        .then((message) => {
            console.log(`Message sent with SID: ${message.sid}`);
            res.json({ success: true, message: 'Emergency alert sent successfully' });
        })
        .catch((error) => {
            console.error(`Error sending message: ${error.message}`);
            res.status(500).json({ success: false, message: 'Error sending emergency alert' });
        });
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
