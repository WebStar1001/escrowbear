<script>
    var botmanWidget = {
        title:'EscrowBear Bot',
        introMessage: 'Hello, I am Yegor! I am here to assist you and answer all your questions about our products and services!',
        mainColor:'#528CCA',
        aboutText:'',
        bubbleBackground:'#528CCA',
        headerTextColor: '#fff',
    };
    $(document).on('click', '.desktop-closed-message-avatar', function() {
        var iframe = document.getElementById("chatBotManFrame");
        iframe.addEventListener('load', function () {
            var htmlFrame = this.contentWindow.document.getElementsByTagName("html")[0];
            var bodyFrame = this.contentWindow.document.getElementsByTagName("body")[0];
            var headFrame = this.contentWindow.document.getElementsByTagName("head")[0];

            var image = "https://images.unsplash.com/photo-1501597301489-8b75b675ba0a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80"
            htmlFrame.style.backgroundImage = "url("+image+")";
            bodyFrame.style.backgroundImage = "url("+image+")";
        });
    });
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
