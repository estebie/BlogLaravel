   <!-- Footer -->
    <footer style="background-color:#EEEAE7">
        <div class="container" >
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Sprobie Blog 2017</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts  -->
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/clean-blog.min.js"></script>
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function(){ div.style.display = "none"; }, 600);
            }
        }
    </script>
<script type="text/javascript">
    var clicked = false;
    function disableMe() {
        if (document.getElementById) {
            if (!clicked) {
                document.getElementById("myButton").value = "thank you";
                clicked = true;
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
</script>