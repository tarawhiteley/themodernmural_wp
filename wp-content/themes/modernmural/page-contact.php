<?php
/*
Template Name: Contact
*/
get_header(interior); ?>

<div class="border">

  <div id="container">

  <header>
    <a href="index.html"><img src="C:\Users\taraw\Documents\UF Work\Capstone\modernmural_wp\wp-content\themes\modernmural\img\header_mural.png" alt="The Modern Mural" title="The Modern Mural"></a>
  </header>

  <section class="signup" id="join_list">

      <div class="bgrd">

        <h3>Submit your custom mural design</h3>

        <p>We would love to help you create the exact mural that you are envisisioning for your!</p>

        <p>Please submit .</p>

        <form id="mini_session" name="mini_session" method="post" action="form.php" onsubmit="return validateForm(this)" autocomplete="on">

            <div class="regular_input">
                <label for="form_options">Please add me to the email list for Mini Sessions in:</label>
                <select id="form_options" name="mini_options">
              <option id="mini_option1" value="gnv">Gainesville</option>
                  <option id="mini_option2" value="srq">Sarasota</option>
                  <option id="mini_option3" value="both">Both</option>
                </select>
            </div>

            <div class="regular_input">
                <label for="mini_name">My name is:</label>
                <input type="text" id="mini_name" name="req_name" value="" style="width:425px" placeholder="Name"/>
            </div>

              <div class="regular_input">
                <label for="mini_email">My email address is:</label>
                <input type="email" id="mini_email" name="req_email" value="" style="width:368px" placeholder="Email" />
            </div>

          <input type="submit" name="submit" value="Submit" class="submit"/>

        </form>
      </div>
    </section>

    <section class="signup" id="book_sess">

      <div class="bgrd">

        <h3>Book a Private Session</h3>

        <p>We are so excited that you are interested in booking a private session! &nbsp;Please fill in the form below so we can get back to you as soon as possible.</p>

        <p>If you are not sure about the day of the week or location, don't worry; feel free to tell us a little about your family and style in the "Other Information" section and we can come up with some creative session ideas together :) </p>



        <form id="book" name="book" method="post" action="form.php" onsubmit="return validateForm(this)" autocomplete="on">

          <div class="regular_input">
                <label for="book_name">My name is:</label>
                <input type="text" id="book_name" name="req_name" style="width:425px" placeholder="Name" />
            </div>

            <div class="regular_input">
                <label for="book_email">My email address is:</label>
                <input type="email" id="book_email" name="req_email" style="width:368px" placeholder="Email" />
            </div>

            <div class="regular_input">
                <label for="book_phone">My phone number is:</label>
                <input type="tel" id="book_phone" name="telephone" style="width:360px" placeholder="(XXX) XXX-XXXX" />
            </div>

          <fieldset class="regular_input">
                <legend class="line">I would prefer to be contacted by:</legend>

                  <div class="line">
                    <input type="radio" id="book_pref_options_email" name="preference" value="email" class="radio_button" />
                  <label for="book_pref_options_email">Email</label>
                  <input type="radio" id="book_pref_options_phonecall" name="preference" value="phone" class="radio_button" />
                  <label for="book_pref_options_phonecall">Phone</label>
                  <input type="radio" id="book_pref_options_text" name="preference" value="text" class="radio_button" />
                  <label for="book_pref_options_text">Text Message</label>
                </div>
              </fieldset>

            <div class="line">
                <label for="session_type_a" >I am interested in a(n):</label>
                <select id="session_type_a" name="mini_options">
              <option id="session_indiv" value="indiv">Individual</option>
                  <option id="session_fam" value="fam">Family</option>
                  <option id="session_other" value="other">Other</option>
                </select>

                <select id="session_type_b" name="mini_options">
              <option id="session_infant" value="infant">Infant Session</option>
                  <option id="session_port" value="portrait">Portrait Session</option>
                  <option id="session_cel" value="celebration">Celebration Coverage</option>
                </select>
            </div>

            <div class="line">
                <label for="form_loc">I was thinking that the best place for our session would be:</label>
                <input type="text" id="form_loc" name="location" style="width:523px" placeholder="Location(s) that interest you like The Thomas Center or Longboat Key" />
            </div>

            <fieldset class="regular_input">
              <legend class="line">I would be available for a session on the following day(s):</legend>

              <div class="line">
                <input type="checkbox" name="day_otw" value="sunday" id="sunday" class="checkbox" />
                  <label for="sunday">Sunday</label>
                  <input type="checkbox" name="day_otw" value="monday" id="monday" class="checkbox" />
                  <label for="monday">Monday</label>
                  <input type="checkbox" name="day_otw" value="tuesday" id="tuesday" class="checkbox" />
                  <label for="tuesday">Tuesday</label>
                  <input type="checkbox" name="day_otw" value="wednseday" id="wednesday" class="checkbox" />
                  <label for="wednesday">Wednesday</label>
            </div>

              <div class="line">
                  <input type="checkbox" name="day_otw" value="thursday" id="thursday" class="checkbox" />
                  <label for="thursday">Thursday</label>
                  <input type="checkbox" name="day_otw" value="friday" id="friday" class="checkbox" />
                  <label for="friday">Friday</label>
                  <input type="checkbox" name="day_otw" value="saturday" id="saturday" class="checkbox" />
                  <label for="saturday">Saturday</label>
                </div>
          </fieldset>

            <div class="regular_input">
                <label for="book_other" id="book_otherinfo">Other Information: </label>
                <textarea id="book_other" name="book_otherinfo"></textarea>
            </div>

          <input type="reset" name="reset" value="Reset" class="reset"/>
          <input type="submit" name="submit" value="Submit" class="submit"/>
        </form>
      </div>
    </section>

    <section id="stretch">
        <p>Thank you for visiting the The Modern Mural! We look forward to helping you create the mural you envision for your walls.</p>
    </section>
  </div>

</div>

<?php get_footer(); ?>
