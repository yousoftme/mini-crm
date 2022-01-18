<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="flex flex-col">
    
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div>
          <!-- create -->
          <div class="bg-gray-100 py-2 flex justify-end">
            <button class="px-3 py-1 bg-green-600 text-white rounded shadow mb-3" @click="open('createModal')">Create</button>
          </div>
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div id="createModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
              <!--
                Background overlay, show/hide based on modal state.

                Entering: "ease-out duration-300"
                  From: "opacity-0"
                  To: "opacity-100"
                Leaving: "ease-in duration-200"
                  From: "opacity-100"
                  To: "opacity-0"
              -->
              <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

              <!-- This element is to trick the browser into centering the modal contents. -->
              <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

              <!--
                Modal panel, show/hide based on modal state.

                Entering: "ease-out duration-300"
                  From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                  To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                  From: "opacity-100 translate-y-0 sm:scale-100"
                  To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              -->
              <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                  <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                      <!-- Heroicon name: outline/exclamation -->
                      <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                      </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                      <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Deactivate account
                      </h3>
                      <div class="mt-2">
                        <p class="text-sm text-gray-500">
                          Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                  <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Deactivate
                  </button>
                  <button @click="close('createModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- table -->
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Contact
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Actions
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="company in companies.data" :key="company.id">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" :src="company.logo" alt="" />
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ company.name }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ company.email }}</div>
                  <div class="text-sm text-gray-500">{{ company.website }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <div>
                  <button class="px-3 py-1 bg-blue-600 text-white rounded shadow mb-3 mx-1" @click="open('editModal')">Edit</button>
                  <button class="px-3 py-1 bg-red-600 text-white rounded shadow mb-3 mx-1" @click="open('deleteModal')">Delete</button>
                  <div class="whitespace-normal">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div id="editModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none;">
                      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <!--
                          Background overlay, show/hide based on modal state.

                          Entering: "ease-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                        <!--
                          Modal panel, show/hide based on modal state.

                          Entering: "ease-out duration-300"
                            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            To: "opacity-100 translate-y-0 sm:scale-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100 translate-y-0 sm:scale-100"
                            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        -->
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/exclamation -->
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                              </div>
                              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                  Deactivate account
                                </h3>
                                <div class="mt-2">
                                  <p class="text-sm text-gray-500">
                                    Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                              Deactivate
                            </button>
                            <button @click="close('editModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display:none;">
                      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <!--
                          Background overlay, show/hide based on modal state.

                          Entering: "ease-out duration-300"
                            From: "opacity-0"
                            To: "opacity-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100"
                            To: "opacity-0"
                        -->
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                        <!--
                          Modal panel, show/hide based on modal state.

                          Entering: "ease-out duration-300"
                            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            To: "opacity-100 translate-y-0 sm:scale-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100 translate-y-0 sm:scale-100"
                            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        -->
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: outline/exclamation -->
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                              </div>
                              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                  Deactivate account
                                </h3>
                                <div class="mt-2">
                                  <p class="text-sm text-gray-500">
                                    Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                              Deactivate
                            </button>
                            <button @click="close('deleteModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- pagination -->
        <div>
          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
              <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Previous
              </a>
              <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Next
              </a>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
              <div>
                <p class="text-sm text-gray-700">
                  Showing
                  <span class="font-medium">{{ companies.from }}</span>
                  to
                  <span class="font-medium">{{ companies.to }}</span>
                  of
                  <span class="font-medium">{{ companies.total }}</span>
                  results
                </p>
              </div>
              <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                  <a v-for="(link, index) in companies.links" :key="index" :href="link.url" aria-current="page" v-html="link.label" :class="link.active ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium' : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium'">
                  </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  props: {
    companies: Object
  },
  methods: {
    open (id) {
      let element = document.getElementById(id);
      element.style.display = 'block';
    },
    close (id) {
      let element = document.getElementById(id);
      element.style.display = 'none';
    },

  },
}
</script>