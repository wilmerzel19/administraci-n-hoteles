<div>
    <x-header title="Registro de un nuevo local" />
    <x-section-header
        title="Datos del local"
        subtitle="Ingrese toda la información para el registro del hotel">

        <!-- Formulario -->
        <form method="post" >
            @csrf
            <div class="grid grid-cols-2 gap-4">
            <!--Nombre-->
            <x-forms.form-input
                id="nombre"
                name="nombre"
                value=""
                label="Nombre del local"
                type="text"
            />

            <!--Nombre-->
            <x-forms.form-input
                id="imagen"
                name="imagen"
                value=""
                label="URL de la imagen"
                type="text"
            />

            <!--Dirección-->
            <x-forms.form-input
                id="direccion"
                name="direccion"
                value=""
                label="Dirección del local"
                type="text"
            />

            <x-forms.form-input
                id="descripcion"
                name="descripcion"
                value=""
                label="Descripción del local"
                type="text"
            />

            <x-forms.form-input
                id="telefono"
                name="telefono"
                value=""
                label="Teléfono del local"
                type="text"
            />

            <x-forms.form-input
                id="website"
                name="website"
                value=""
                label="Website del local"
                type="text"
            />

            <x-forms.form-input
                id="calificacion"
                name="calificacion"
                value=""
                label="Calificacion del local"
                type="text"
            />
            <x-forms.form-select
                id="tipo"
                name="tipo"
                value=""
                label="Tipo de local"
                :data="$tiposDeLocales"
            >

            </x-forms.form-select>

            </div>
            <x-primary-button>
                Guardar
            </x-primary-button>


        </form>

    </x-section-header>
</div>



