<footer id="fh5co-footer" role="contentinfo" class="fh5co-bg-section border-bottom">
        <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-push-1 animate-box">
                            
                            <div class="fh5co-contact-info">
                                <h3>Contact Information</h3>
                                <ul>
                                    <li class="address">41 Yakubu Gowon Way, Jos<br>Plateau state Nigeria </li>
                                    <li class="phone"><a href="#">+234(0) 8144863035</a></li>
                                    <li class="email"><a href="#">actallianceafrica@gmail.com</a></li>
                                    <li class="url"><a href="#">support@agrotransafrica.org</a></li>
                                </ul>
                            </div>
        
                        </div>
                        <div class="col-md-6 animate-box">
                            <h3>Get In Touch</h3>
                            @include('inc.messages')
                            
                        <form id="reused_form" method="POST" action="{{route('home-message')}}">
                          {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address*" required>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                                 
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write Message*" required></textarea>
                                    
                                </div>
                                <button id="btnContactUs" type="submit" class="btn btn-primary">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2018 Agrotech.com All Rights Reserved.</small> 
                    <small class="block">Designed by <a href="#" target="_blank">agrolighttech.com</a></small>
                </p>
                <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </p>
            </div>
        </div>

    </div>
</footer>