<div class="mb-3">{{ $buscador }}
    <div class="relative flex flex-wrap items-stretch w-full mb-4">
      <input type="text" wire:model="buscador" class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300  bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
        placeholder="Escriba la palabra o codigo a buscar"
        aria-label="Search"
        aria-describedby="button-addon3" />

      <!--Search button-->
      <button
        class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase  transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 bg-blue-400"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
       Buscar
      </button>
    </div>
  </div>
