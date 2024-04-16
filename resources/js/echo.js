import Echo from "laravel-echo";
import Pusher from "pusher-js";
import axios from "axios";
import { toaster } from "evergreen-ui";

window.toaster = toaster;
window.Pusher = Pusher;
window.axios = axios;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: process.env.PUSHER_APP_KEY,
    cluster: process.env.PUSHER_APP_CLUSTER,
    encrypted: process.env.PUSHER_SCHEME === "https",
    wsHost: process.env.PUSHER_HOST,
    wsPort: process.env.PUSHER_PORT,
    wssPort: process.env.PUSHER_PORT,
});

window.Echo.channel("chat-channel").listen("chat-event", (data) => {
    document.getElementById("MessageBox").innerHTML +=
        "<div><strong>" + data.user + ":</strong> " + data.message + "</div>";
});
