@props(['id', 'evidencia'])
<form action="{{ route('evidencias.update', $id) }}" method="PUT" class="max-w-xl space-y-5 rounded-lg bg-white p-6 shadow">
@csrf
  <div>
    <label for="estudiante_id" class="mb-1 block text-sm font-medium text-gray-700">Estudiante</label>
    <input type="number" id="estudiante_id" name="estudiante_id" value="{{ old('estudiante_id', $evidencia['estudiante_id']) }}" min="1"
           class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div>
    <label for="tarea_id" class="mb-1 block text-sm font-medium text-gray-700">Tarea</label>
    <input type="number" id="tarea_id" name="tarea_id" value="{{ old('tarea_id', $evidencia['tarea_id']) }}" min="1"
           class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div>
    <label for="url" class="mb-1 block text-sm font-medium text-gray-700">Dirección</label>
    <input type="url" id="url" name="url" value="{{ old('url', $evidencia['url']) }}" placeholder="https://..."
           class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

  <div>
    <label for="descripcion" class="mb-1 block text-sm font-medium text-gray-700">Descripción</label>
    <textarea id="descripcion" name="descripcion" rows="4"
              class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('descripcion', $evidencia['descripcion']) }}</textarea>
  </div>

  <div>
    <label for="estado_validacion" class="mb-1 block text-sm font-medium text-gray-700">Estado de validación</label>
    <select id="estado_validacion" name="estado_validacion"
            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
      <option value="pendiente">Pendiente</option>
      <option value="validada">Validada</option>
      <option value="rechazada">Rechazada</option>
      <option value="asignada">Asignada</option>
    </select>
  </div>

  <div class="flex space-x-3 margin-top-2">
    <x-bookme.boton primario type="submit">
      @isset($id)
        Actualizar Evidencia
      @else
        Crear Evidencia
      @endisset
    </x-bookme.boton>
</form>