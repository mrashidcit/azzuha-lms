<!DOCTYPE html>
<html lang="en">
@include('layout.internal')
@yield('head')
<body>
  @yield('header')
  <section id="contact-info">
    <div class="center">
      <h2>How to Reach Us?</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="gmap-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 text-center">
            <div class="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29714.293934497593!2d39.81859377346733!3d21.417971516470946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c21b4ced818775%3A0x98ab2469cf70c9ce!2sMecca+Saudi+Arabia!5e0!3m2!1sen!2sus!4v1412214548949" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
          </div>
          <div class="col-sm-7 map-content">
            <ul class="row">
              <li class="col-sm-6">
                <address>
                  <h5>Masjid</h5>
                  <p>1537 Flint Street <br>
                    Tumon, MP 96911</p>
                    <p>Phone:670-898-2847 <br>
                      Email Address:info@domain.com</p>
                    </address>
                    <address>
                      <h5>Masjid</h5>
                      <p>1537 Flint Street <br>
                        Tumon, MP 96911</p>
                        <p>Phone:670-898-2847 <br>
                          Email Address:info@domain.com</p>
                        </address>
                      </li>
                      <li class="col-sm-6">
                        <address>
                          <h5>Masjid</h5>
                          <p>1537 Flint Street <br>
                            Tumon, MP 96911</p>
                            <p>Phone:670-898-2847 <br>
                              Email Address:info@domain.com</p>
                            </address>
                            <address>
                              <h5>Masjid</h5>
                              <p>1537 Flint Street <br>
                                Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                  Email Address:info@domain.com</p>
                                </address>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section id="contact-page">
                    <div class="container">
                      <div class="center">
                        <h2>Drop Your Message</h2>
                        <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                      <div class="row contact-wrap">
                        <div class="status alert alert-success" style="display:none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                          <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                              <label>Name *</label>
                              <input type="text" name="name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                              <label>Email *</label>
                              <input type="email" name="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                              <label>Phone</label>
                              <input type="number" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Company Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label>Subject *</label>
                              <input type="text" name="subject" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                              <label>Message *</label>
                              <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </section>
                  @yield('footer')
                </body>
                </html>
