@extends('admin.layouts.main')

@section('title', 'Display Partner, Client, Sponsor list')

@section('content')
    <div class="uk-section">
        <div class="uk-container">

            <div class="uk-width-1-1">
                <div class="card card-transparent">

                    <div class="custom-table-wrapper uk-overflow-auto">
                        <table class="custom-table uk-table uk-table-hover">
                            <thead>
                            <th>N|O</th>
                            <th>Author's name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                            <th>Action</th>
                            </thead>
                            <tbody id="tableData">
                            @foreach($authors as $author)
                                <tr>
                                    <td class="order-number">{{$loop->iteration}}</td>
                                    <td class="uk-text-ellipse">{{ Str::title($author->username) }}</td>
                                    <td class="uk-text-ellipse">{{$author->phone}}</td>
                                    <td class="uk-text-ellipse">{{$author->email}}</td>
                                    <td class="uk-text-ellipse"><img src="{{$author->picture}}" width="180"/> </td>
                                    <td>
                                        <button class="action-btn"><i class="fa fa-ellipsis-v"></i></button>

                                        <div data-partner-id="{{ $author->id }}" class="action-box uk-card uk-card-body">
                                            <a href="{{ URL('admin/author/edit', $author->id) }}" class="btnEdit">Edit &amp; Update</a>
                                            <li class="btnRemove">Remove</li>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('script_dependencies')
<script src="{{ asset('admins/js/crud.js') }}"></script>
@endpush

@section('script')
    <script>
        $(document).ready(function(){

            $(window).click(function() {
                $('.action-box.visible').removeClass('visible');
            });

            /**
             * Toggle visibility of action card box
             */
            $('.action-btn').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                var target = $(this).parent('td').find('.action-box');
                $('.action-box.visible').not(target).removeClass('visible');
                $(target).toggleClass('visible');
            });

            /**
             * Handle record deletion
             */
            $('.btnRemove').on('click', function(e){
                e.preventDefault();
                var self = $(this);
                var route = "{{ route('admin.ajax.delete_author') }}",
                    data = {
                        id: $(this).parent('.action-box').attr('data-partner-id')
                    },
                    csrfToken = $('meta[name="csrf-token"]').attr('content');
                BIGK.crud.deleteRecord(route, data, csrfToken, function(){
                    $(self).parents('tr').remove();
                    $('#tableData').find('tr').each(function(i, k, v){
                        $(this).find('.order-number').empty().text(++i);
                    });
                });
            });

            /**
             * Handle update
             */

        });
    </script>
@endsection
