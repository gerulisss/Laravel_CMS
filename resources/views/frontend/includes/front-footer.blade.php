<footer class="bg-light text-center text-lg-start">
    <div class="text-left p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      &copy Copyright {{ date('Y') }}
      <a class="text-dark" href="https://yourwebsite.com">Your website name</a>

      All Rights Reserved.
        <a href="https://{{ env('DEVELOPER_WEBSITE') }}.lt" class="text-dark">{{ env('DEVELOPER_COPYRIGHTS') }}</a>
        {{ __('Conctact information') }} <a href="mailto:{{ env('CONTACT_EMAIL') }}">{{ env('CONTACT_EMAIL') }}</a>
    </div>
  </footer>
