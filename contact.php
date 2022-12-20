<?php require_once('header.php') ?>
<div class="content">
    <h1>❤️ Contact Fransoé ❤️</h1>
    <form class="form" method="post" enctype="multipart/form-data" action="mail.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else except Fransoé.</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="name" class="form-text">The name Fransoé will see.</div>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" name="subject" class="form-control" id="subject" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">
                Your message
            </label>
            <textarea class="form-control" name="textarea" id="textarea" rows="3"></textarea>
        </div>
        <div class="upload">
            <label for="imageUpload">Upload a screenshot for Fransoé</label>
            <input type="file" name="screenshot" id="imageUpload" />
        </div>
        <button name="send">Send</button>
    </form>

</div>

<script src="/src/tinymce/tinymce.min.js"></script>
<script src="/js/tiny.js"></script>