<script>
    function initFreshChat() {
        window.fcWidget.init({
            token: "58821857-30f4-4628-9c6e-23e8193705c9",
            host: "https://wchat.in.freshchat.com",
            faqTags: {
                // Array of Tags
                tags: ['churchcms'],
                //For articles, the below value should be article.
                //For article category, the below value should be category.
                filterType: 'category' //Or filterType: 'article'
            },
        });
    }

    function initialize(i, t) {
        var e;
        i.getElementById(t) ? initFreshChat() : ((e = i.createElement("script")).id = t, e.async = !0, e.src =
            "https://wchat.in.freshchat.com/js/widget.js", e.onload = initFreshChat, i.head.appendChild(e))
    }

    function initiateCall() {
        initialize(document, "freshchat-js-sdk")
    }
    window.addEventListener ? window.addEventListener("load", initiateCall, !1) : window.attachEvent("load",
        initiateCall, !1);
</script>
