{{-- keluhan --}}
<div class="mb-2 relative block">
    <label 
    for="keluhan" 
    class="block mb-2 text-sm font-medium text-gray-700">Your Complaint</label>
    <textarea 
    id="keluhan" 
    rows="4" 
    required
    name="keluhan"
    class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder="Write your complaint here...">{{ old('keluhan', $data_keluhan_harapan->keluhan ?? '') }}</textarea>
</div>

{{-- harapan --}}
<div class="mb-2 relative block">
    <label 
    for="harapan" 
    class="block mb-2 text-sm font-medium text-gray-700">Your hope</label>
    <textarea 
    id="harapan" 
    rows="4" 
    required
    name="harapan"
    class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder="Write your hope here...">{{ old('harapan', $data_keluhan_harapan->harapan ?? '') }}</textarea>
</div>