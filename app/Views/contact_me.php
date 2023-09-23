<div class="flex flex-col lg:flex-row gap-4">
    <div class="w-full lg:w-72 flex-1 border-2 border-primary shadow p-3 rounded">
        <h3 class="text-lg font-bold">Keep In Touch</h3>
        <p class="text-base">
            <?= esc($contact['sub_title']) ?>
        </p>
        <div class="flex items-center gap-3 mt-5">
            <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
            </svg>
            <span><?= esc($contact['phone']) ?></span>
        </div>
        <div class="flex items-center gap-3 mt-3">
            <img src="./assets/icon/mail.svg" alt="" />
            <span class="text-xs"><?= esc($contact['email']) ?></span>
        </div>
        <div class="flex items-center gap-3 mt-3">
            <svg class="w-6 h-6 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
            </svg>
            <address class="text-xs">
                <?= esc($contact['address']) ?>
            </address>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14610.331611795993!2d90.37420548535044!3d23.726584449798832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8dd4855f073%3A0x27aa71bcab92ae5a!2sBangladesh%20University%20of%20Engineering%20and%20Technology%20(BUET)!5e0!3m2!1sen!2sbd!4v1695144896746!5m2!1sen!2sbd" class="flex-1 w-full" height="200" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>