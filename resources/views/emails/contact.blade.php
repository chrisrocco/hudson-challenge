@component('mail::message')
# New Website Contact
#### From {{$data['from_name']}}

@component('mail::panel')
>{{$data['message']}}
@endcomponent

---

Reply to {{$data['from_name']}} at **{{$data['reply_to']}}**
@endcomponent
