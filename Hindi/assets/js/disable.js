// disable right click
        document.addEventListener('contextmenu', event => event.preventDefault());

        document.onkeydown = function (e) {

            // disable F12 key
            if(e.keyCode == 123){
                // alert("F12 disable");
                return false;
            }
            // disable c key
            if(e.ctrlKey && e.keyCode == 67){
                // alert("ctrl + c disable");
                return false;
            }
                // disable U key
                if(e.ctrlKey && e.keyCode == 85){
                // alert("ctrl + u disable");
                return false;
            }
        }
