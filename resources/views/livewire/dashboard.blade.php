<x-ts-app-layout x-data="{ 
  plaid: null,
  init() {
    this.plaid = Plaid.create({
      token: '{{ $link_token }}',
      receivedRedirectUri: window.location.href,
      onSuccess: (public_token, metadata) => {
        $wire.set('public_token', public_token)
      },
      onLoad: () => {
        //
      },
      onExit: (err, metadata) => {
        //
      },
      onEvent: (eventName, metadata) => {
        //
      },
    })
  } 
}">
  
  <ts-slot-head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
  </ts-slot-head> 

  <ts-slot-sidebar>
    Test
  </ts-slot-sidebar>

  <h1 class="text-3xl font-bold">@lang('tallsaas.budget::budget.budget')</h1>

  <x-ts-button @click="">Link</x-ts-button>

  {{--
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jane Cooper</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Regional Paradigm Technician</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">jane.cooper@example.com</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  --}}

</x-ts-app-layout>