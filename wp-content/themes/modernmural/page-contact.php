<?php
/*
Template Name: Contact
*/
get_header(interior); ?>

<div class="border"> <!--trying to get lower border to work -->

  <aside class="contactAside">
    <h1>We're here to help!</h1>
      <p>By far the easiest way to contact us when we are online is to use the "Live Help" option at the top of our support pages. In most cases we will be able to answer your question on the spot. In the unlikely event we can't, we'll respond by email as soon as we have an answer.</p>
  </aside>

  <section class="contactSection">
    <article class="contact">
      <img src="wp-content\themes\modernmural\img\livechat.png" class="contactImg">
      <h2>Live Chat</h2>
    </article>

    <article class="contact">
      <img src="wp-content\themes\modernmural\img\email.png" class="contactImg">
      <h2>Email</h2>
        <p><a href="mailto:TheModernMural@gmail.com">TheModernMural@gmail.com</a></p>
    </article>

    <article class="contact">
      <img src="wp-content\themes\modernmural\img\mail.png" class="contactImg">
      <h2>Mail</h2>
        <p>TheModernMural.com<br>
        Jennifer Jeffers LLC<br>
        P.O. Box 358998<br>
        Gainesville, FL 32635-8998<br>
        United States </p>
    </article>

    <article class="contact">
      <img src="wp-content\themes\modernmural\img\phone.png" class="contactImg">
        <h2>Phone</h2>
          <p>US &amp; Canada: <a href="tel:+13522993538">352-299-3538</a></p>
          <p>International: Dial your international access code followed by 1-352-299-3538</p>
    </article>
  </section>

</div>

<?php get_footer(); ?>
