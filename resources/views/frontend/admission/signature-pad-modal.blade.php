 <div class="fixed inset-0 z-[9999] bg-black/50 hidden items-center justify-center p-4" id="sigModal">
     <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden shadow-2xl">

         <div class="bg-gradient-to-r from-blue-900 to-blue-700 px-6 py-4 flex items-center justify-between">
             <h3 class="text-white font-bold text-base flex items-center gap-2">
                 <svg class="w-4 h-4 text-white/70" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                     <path d="M12 20h9" />
                     <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                 </svg>
                 Draw your signature
             </h3>
             <button
                 class="w-8 h-8 rounded-lg bg-white/20 border border-white/30 text-white hover:bg-white/30 transition flex items-center justify-center text-lg"
                 type="button" onclick="closePad()">✕</button>
         </div>

         <div class="p-6">
             <div class="relative border-2 border-slate-200 rounded-xl bg-white overflow-hidden">
                 <canvas class="block w-full" id="sigCanvas"
                     style="height:200px;cursor:crosshair;touch-action:none;"></canvas>
                 <div class="absolute inset-0 flex flex-col items-center justify-center gap-2 pointer-events-none transition-opacity"
                     id="canvasHint">
                     <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.2"
                         viewBox="0 0 24 24">
                         <path d="M12 20h9" />
                         <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                     </svg>
                     <p class="text-sm text-slate-400 font-medium">Sign in the box above</p>
                 </div>
             </div>

             {{-- Toolbar --}}
             <div class="flex items-center justify-between mt-3 flex-wrap gap-2">
                 <div class="flex items-center gap-2">
                     <button
                         class="sig-swatch w-6 h-6 rounded-full bg-slate-800 ring-2 ring-blue-500 ring-offset-1 transition"
                         type="button" onclick="setColor('#1e293b',this)" title="Black"></button>
                     <button class="sig-swatch w-6 h-6 rounded-full bg-blue-700 transition" type="button"
                         onclick="setColor('#1d4ed8',this)" title="Blue"></button>
                     <button class="sig-swatch w-6 h-6 rounded-full bg-green-700 transition" type="button"
                         onclick="setColor('#15803d',this)" title="Green"></button>
                     <div class="flex items-center gap-1.5 ml-2 text-xs text-slate-500">
                         <span class="text-[10px]">●</span>
                         <input class="w-16 accent-blue-600" id="penSize" type="range" min="1" max="6"
                             value="2" oninput="sigPenW=+this.value">
                         <span class="text-base leading-none">●</span>
                     </div>
                 </div>
                 <button
                     class="inline-flex items-center gap-1.5 text-xs font-semibold text-red-500
                           bg-red-50 border border-red-200 px-3 py-1.5 rounded-lg hover:bg-red-100 transition"
                     type="button" onclick="clearSigCanvas()">
                     <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                         <path d="M3 6h18M19 6l-1 14H6L5 6M9 6V4h6v2" />
                     </svg>
                     Clear
                 </button>
             </div>

             <div class="flex gap-2 justify-end mt-5 pt-4 border-t border-slate-100">
                 <button
                     class="px-5 py-2.5 text-sm font-semibold text-slate-600 bg-slate-100 rounded-xl hover:bg-slate-200 transition"
                     type="button" onclick="closePad()">
                     Cancel
                 </button>
                 <button
                     class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold text-white
                           bg-blue-800 rounded-xl hover:bg-blue-700 transition"
                     type="button" onclick="saveSig()">
                     <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                         viewBox="0 0 24 24">
                         <path d="M20 6L9 17l-5-5" />
                     </svg>
                     Use this signature
                 </button>
             </div>
         </div>
     </div>
 </div>
