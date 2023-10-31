@component('mail::message')

Welcome to Praktikum Pemrograman Web 
      
Name: {{ $mailData['name'] }}<br/>
Email: {{ $mailData['email'] }}
      
Thanks,<br/>
{{ config('app.name') }}

@endcomponent