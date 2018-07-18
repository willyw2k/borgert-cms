@extends('admin.mailbox.index')

@section('title', trans('admin/mailbox.trash.title'), @parent)

@section('mailbox')
    
    <div class="mail-box-header">

        <h4>@lang('admin/mailbox.trash.title') ({{ $mailbox->total() }})</h4>

        @include('admin/mailbox/_inc/empty',['icone'=>'trash'])

    </div>
    <div class="mail-box">

        @include('admin/mailbox/_inc/list')

    </div>

@endsection