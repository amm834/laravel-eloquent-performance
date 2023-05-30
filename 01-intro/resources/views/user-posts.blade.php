@extends('layouts.main')
@section('content')
    <table class="border-collapse table-auto w-full text-sm  my-8 rounded-full">
        <thead>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
            Author
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
            Post Count
        </th>
        </thead>
        <tbody class="bg-white">
        @foreach($users as $user)
            <tr class="hover:bg-gray-50 transition-colors">
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $user->name}}</td>
                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                    {{ $user->posts_count}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
