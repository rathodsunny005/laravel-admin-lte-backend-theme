<html>
    <head>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/jquery.hotkeys.js')}}"></script>
        

    
        <script>
        
            function domo(){
                jQuery('#platform-details').html('<code>' + navigator.userAgent + '</code>');
                
                var elements = [
                    "esc","tab","space","return","backspace","scroll","capslock","numlock","insert","home","del","end","pageup","pagedown",
                    "left","up","right","down",
                    "f1","f2","f3","f4","f5","f6","f7","f8","f9","f10","f11","f12",
                    "1","2","3","4","5","6","7","8","9","0",
                    "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
                    "Ctrl+a","Ctrl+b","Ctrl+c","Ctrl+d","Ctrl+e","Ctrl+f","Ctrl+g","Ctrl+h","Ctrl+i","Ctrl+j","Ctrl+k","Ctrl+l","Ctrl+m",
                    "Ctrl+n","Ctrl+o","Ctrl+p","Ctrl+q","Ctrl+r","Ctrl+s","Ctrl+t","Ctrl+u","Ctrl+v","Ctrl+w","Ctrl+x","Ctrl+y","Ctrl+z",

                    "Ctrl+Shift+a","Ctrl+Shift+b","Ctrl+Shift+c","Ctrl+Shift+d","Ctrl+Shift+e","Ctrl+Shift+f","Ctrl+Shift+g","Ctrl+Shift+h","Ctrl+Shift+i","Ctrl+Shift+j","Ctrl+Shift+k","Ctrl+Shift+l","Ctrl+Shift+m",
                    "Ctrl+Shift+n","Ctrl+Shift+o","Ctrl+Shift+p","Ctrl+Shift+q","Ctrl+Shift+r","Ctrl+Shift+s","Ctrl+Shift+t","Ctrl+Shift+u","Ctrl+Shift+v","Ctrl+Shift+w","Ctrl+Shift+x","Ctrl+Shift+y","Ctrl+Shift+z",

                    "Alt+Ctrl+a","Alt+Ctrl+b","Alt+Ctrl+c","Alt+Ctrl+d","Alt+Ctrl+e","Alt+Ctrl+f","Alt+Ctrl+g","Alt+Ctrl+h","Alt+Ctrl+i","Alt+Ctrl+j","Alt+Ctrl+k","Alt+Ctrl+l",
                    "Alt+Ctrl+m","Alt+Ctrl+n","Alt+Ctrl+o","Alt+Ctrl+p","Alt+Ctrl+q","Alt+Ctrl+r","Alt+Ctrl+s","Alt+Ctrl+t","Alt+Ctrl+u","Alt+Ctrl+v","Alt+Ctrl+w","Alt+Ctrl+x","Alt+Ctrl+y","Alt+Ctrl+z",

                    "Alt+Shift+a","Alt+Shift+b","Alt+Shift+c","Alt+Shift+d","Alt+Shift+e","Alt+Shift+f","Alt+Shift+g","Alt+Shift+h","Alt+Shift+i","Alt+Shift+j","Alt+Shift+k","Alt+Shift+l",
                    "Alt+Shift+m","Alt+Shift+n","Alt+Shift+o","Alt+Shift+p","Alt+Shift+q","Alt+Shift+r","Alt+Shift+s","Alt+Shift+t","Alt+Shift+u","Alt+Shift+v","Alt+Shift+w","Alt+Shift+x","Alt+Shift+y","Alt+Shift+z",


                    
                    

                    "Shift+a","Shift+b","Shift+c","Shift+d","Shift+e","Shift+f","Shift+g","Shift+h","Shift+i","Shift+j","Shift+k","Shift+l",
                    "Shift+m","Shift+n","Shift+o","Shift+p","Shift+q","Shift+r","Shift+s","Shift+t","Shift+u","Shift+v","Shift+w","Shift+x",
                    "Shift+y","Shift+z",
                    "Alt+a","Alt+b","Alt+c","Alt+d","Alt+e","Alt+f","Alt+g","Alt+h","Alt+i","Alt+j","Alt+k","Alt+l",
                    "Alt+m","Alt+n","Alt+o","Alt+p","Alt+q","Alt+r","Alt+s","Alt+t","Alt+u","Alt+v","Alt+w","Alt+x","Alt+y","Alt+z",
                    "Ctrl+esc","Ctrl+tab","Ctrl+space","Ctrl+return","Ctrl+backspace","Ctrl+scroll","Ctrl+capslock","Ctrl+numlock",
                    "Ctrl+insert","Ctrl+home","Ctrl+del","Ctrl+end","Ctrl+pageup","Ctrl+pagedown","Ctrl+left","Ctrl+up","Ctrl+right",
                    "Ctrl+down",
                    "Ctrl+f1","Ctrl+f2","Ctrl+f3","Ctrl+f4","Ctrl+f5","Ctrl+f6","Ctrl+f7","Ctrl+f8","Ctrl+f9","Ctrl+f10","Ctrl+f11","Ctrl+f12",
                    "Shift+esc","Shift+tab","Shift+space","Shift+return","Shift+backspace","Shift+scroll","Shift+capslock","Shift+numlock",
                    "Shift+insert","Shift+home","Shift+del","Shift+end","Shift+pageup","Shift+pagedown","Shift+left","Shift+up",
                    "Shift+right","Shift+down",
                    "Shift+f1","Shift+f2","Shift+f3","Shift+f4","Shift+f5","Shift+f6","Shift+f7","Shift+f8","Shift+f9","Shift+f10","Shift+f11","Shift+f12",
                    "Alt+esc","Alt+tab","Alt+space","Alt+return","Alt+backspace","Alt+scroll","Alt+capslock","Alt+numlock",
                    "Alt+insert","Alt+home","Alt+del","Alt+end","Alt+pageup","Alt+pagedown","Alt+left","Alt+up","Alt+right","Alt+down",
                    "Alt+f1","Alt+f2","Alt+f3","Alt+f4","Alt+f5","Alt+f6","Alt+f7","Alt+f8","Alt+f9","Alt+f10","Alt+f11","Alt+f12"
                ];
                
                // the fetching...
                $.each(elements, function(i, e) { // i is element index. e is element as text.
                   var newElement = ( /[\+]+/.test(elements[i]) ) ? elements[i].replace("+","+") : elements[i]; 
                   //console.log(newElement);
                   // Binding keys
                   $('#t1').bind('keydown', elements[i], function assets() {
                       //$('#_'+ newElement).addClass("dirty");
                      $('#t1').val(newElement);
                      //console.log($('#t1').val())           
                      $('#t1').on('keydown',function(){
                      
             jQuery.ajax({
                  url: "{{ route('getdata') }}",
                  method: 'get',
                  data: {
                     name: $(this).val(),
                     
                  },
                  success: function(result){
                     //console.log(result);
                     //alert(result);
                     $('#t2').val(result);
                  }
                });
            });
                      
                        //alert(newElement);
                        return false;
                   });
                   //console.log(newElement); 
                });
                
            }


            
            jQuery(document).ready(domo);
            //console.log(demo);
            
        </script>
    </head>

    <body>
    <form action='/keypress' method="post">
    @csrf
        <input type="text" id="t1" name="keypress">    
        <input type="text" id="t2" name="key">
        <input type="submit" value="submit">
    </body></html>
