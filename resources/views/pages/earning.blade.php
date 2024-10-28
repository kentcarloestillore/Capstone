@extends('layouts.app')

@section('content')
    <header name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Earnings
        </h2>
    </header>

    <!-- Parish Information -->
    <div class="text-center mb-6">
        <h3 class="text-xl font-semibold">Saint Isidore the Farmer Parish</h3>
        <p class="text-gray-600">San Isidro Bohol 6345</p>
    </div>

    <!-- Income Summary -->
    <div class="bg-gray-100 border border-gray-300 rounded-lg p-6 mb-8 text-center">
        <h4 class="text-lg font-semibold mb-4">Month Of August Income</h4>
        <div class="grid grid-cols-1 gap-4">
            <div class="flex justify-between">
                <span>Total Chapel Collected Offering:</span>
                <span>₱ 10,000.00</span>
            </div>
            <div class="flex justify-between">
                <span>Total Parish Collected Offering:</span>
                <span>₱ 15,000.00</span>
            </div>
            <div class="flex justify-between">
                <span>Total Transaction Income:</span>
                <span>₱ 8,000.00</span>
            </div>
            <div class="flex justify-between">
                <span>Total Donation:</span>
                <span>₱ 5,000.00</span>
            </div>
            <div class="flex justify-between font-bold">
                <span>Overall Total Parish Income:</span>
                <span>₱ 38,000.00</span>
            </div>
        </div>
    </div>

    <!-- Mass Offerings and Convent Transactions -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Mass Offerings Table -->
        <div class="bg-gray-100 border border-gray-300 rounded-lg p-6">
            <h4 class="text-lg font-semibold mb-4 text-center">Mass Offerings</h4>
            <table class="min-w-full text-left table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Parish/Chapel</th>
                        <th class="px-4 py-2">Collected</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Saint Isidore the Farmer Parish</td>
                        <td class="border px-4 py-2">₱ 15,000.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Poblacion Chapel</td>
                        <td class="border px-4 py-2">₱ 4,000.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cantabon Chapel</td>
                        <td class="border px-4 py-2">₱ 3,000.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Cabanugan Chapel</td>
                        <td class="border px-4 py-2">₱ 3,000.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-bold">
                        <td class="border px-4 py-2">Total:</td>
                        <td class="border px-4 py-2">₱ 25,000.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Convent Transactions Table -->
        <div class="bg-gray-100 border border-gray-300 rounded-lg p-6">
            <h4 class="text-lg font-semibold mb-4 text-center">Convent Transactions</h4>
            <table class="min-w-full text-left table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Pamisa</td>
                        <td class="border px-4 py-2">₱ 15,000.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">PSS</td>
                        <td class="border px-4 py-2">₱ 4,000.00</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Certificate</td>
                        <td class="border px-4 py-2">₱ 3,000.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-bold">
                        <td class="border px-4 py-2">Total:</td>
                        <td class="border px-4 py-2">₱ 8,000.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection
