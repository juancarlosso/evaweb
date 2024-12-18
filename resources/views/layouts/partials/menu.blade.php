<!--begin::Header navs-->
<div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
	<!--begin::Container-->
	<div class="d-lg-flex container-xxl w-100">
		<!--begin::Wrapper-->
		<div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
			<!--begin::Header tab content-->
			<div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
				<!--begin::Tab panel-->
				<div class="tab-pane fade active show" id="kt_header_navs_tab_1">
					<!--begin::Menu wrapper-->
					<div class="header-menu flex-column align-items-stretch flex-lg-row">
						<!--begin::Menu-->
						<div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
							<!--begin:Menu item-->

							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
								<!--begin:Menu link-->
								<a href="{{route('usuarios.index')}}">
									<span class="menu-link py-3 {{request()->is(['usuarios','usuarios/*']) ? 'active' : ''}}">
										<span class="menu-title">Usuarios</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('clientes.index')}}">
									<span class="menu-link py-3 {{request()->is(['clientes','clientes/*']) ? 'active' : ''}}">
										<span class="menu-title">Clientes</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('cuentas_especiales.index')}}">
									<span class="menu-link py-3 {{request()->is(['cuentas_especiales','cuentas_especiales/*']) ? 'active' : ''}}">
										<span class="menu-title">Cuentas Especiales</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('proveedores.index')}}">
									<span class="menu-link py-3 {{request()->is(['proveedores','proveedores/*']) ? 'active' : ''}}">
										<span class="menu-title">Proveedores</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('aseguradoras.index')}}">
									<span class="menu-link py-3 {{request()->is(['aseguradoras','aseguradoras/*']) ? 'active' : ''}}">
										<span class="menu-title">Aseguradoras</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('estados.index')}}">
									<span class="menu-link py-3 {{request()->is(['estados','estados/*']) ? 'active' : ''}}">
										<span class="menu-title">Estados</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<a href="{{route('municipios.index')}}">
									<span class="menu-link py-3 {{request()->is(['municipios','municipios/*']) ? 'active' : ''}}">
										<span class="menu-title">Municipios</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
								</a>
								<!--end:Menu link-->

							</div>
							<!--end:Menu item-->

							<!--begin:Menu item-->
							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
								<!--begin:Menu link-->
								<span class="menu-link py-3 {{request()->is(['clasificaciones/tipos_servicios/*']) ? 'active' : ''}}">
									<span class="menu-title">Clasificaciones</span>
									<span class="menu-arrow d-lg-none"></span>
								</span>
								<!--end:Menu link-->
								<!--begin:Menu sub-->
								<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['clasificaciones','clasificaciones/tipos_servicios/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_servicios')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de servicios</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['coberturas_poliza','coberturas_poliza/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','coberturas_poliza')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Coberturas de Poliza</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['etapas_cabina','etapas_cabina/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','etapas_cabina')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Etapas Cabina</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['delitos','delitos/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','delitos')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Delitos</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['responabilidades_iniciales','responabilidades_iniciales/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','responabilidades_iniciales')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Responsabilidad Inicial</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['responabilidades_finales','responabilidades_finales/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','responabilidades_finales')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Responsabilidad Final</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['tipos_estimaciones','tipos_estimaciones/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_estimaciones')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de estimaciones</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['estados_conductor','estados_conductor/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','estados_conductor')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Estado de conductor</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['tipos_documentos','tipos_documentos/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_documentos')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de Documento</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['tipos_asistencias','tipos_asistencias/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_asistencias')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de Asitencia</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['tipos_autoridad','tipos_autoridad/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_autoridad')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de autoridad</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['resultados_conclusiones','resultados_conclusiones/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','resultados_conclusiones')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Resultado o Conslusion</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['tipos_expedientes','tipos_expedientes/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','tipos_expedientes')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Tipos de expedientes</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['formas_conclusion','formas_conclusion/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','formas_conclusion')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Formas de conclusión</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link py-3 {{request()->is(['situaciones_terceros','situaciones_terceros/*']) ? 'active' : ''}}" href="{{route('clasificaciones.index','situaciones_terceros')}}" >
											<span class="menu-icon">
												<i class="fa-regular fa-circle-dot"></i>
											</span>
											<span class="menu-title">Situación de tercero</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end:Menu sub-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Tab panel-->
				<!--begin::Tab panel-->
				<div class="tab-pane fade" id="kt_header_navs_tab_2">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
						<div class="d-flex flex-column flex-lg-row gap-2">
							<a class="btn btn-sm btn-light-primary fw-bold" href="#">Opcion 1</a>
                            <a class="btn btn-sm btn-light-primary fw-bold" href="#">Opcion 2</a>
                            <a class="btn btn-sm btn-light-primary fw-bold" href="#">Opcion 3</a>
                            <a class="btn btn-sm btn-light-primary fw-bold" href="#">Opcion 4</a>
                            <a class="btn btn-sm btn-light-primary fw-bold" href="#">Opcion 5</a>
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Tab panel-->
				<!--begin::Tab panel-->
				<div class="tab-pane fade" id="kt_header_navs_tab_3">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
						<div class="d-flex flex-column flex-lg-row gap-2">
							<a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 1</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 2</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 3</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 4</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 5</a>
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Tab panel-->
				<!--begin::Tab panel-->
				<div class="tab-pane fade" id="kt_header_navs_tab_4">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
						<div class="d-flex flex-column flex-lg-row gap-2">
							<a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 1</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 2</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 3</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 4</a>
                            <a class="btn btn-sm btn-light-secondary fw-bold" href="#">Opcion 5</a>
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Tab panel-->
				<!--begin::Tab panel-->
				<div class="tab-pane fade" id="kt_header_navs_tab_5">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
						<div class="d-flex flex-column flex-lg-row gap-2">
							<a class="btn btn-sm btn-light-primary fw-bold" href="https://preview.keenthemes.com/html/metronic/docs">Documentation</a>
							<a class="btn btn-sm btn-light-success fw-bold" href="documentation/getting-started/video-tutorials.html">Video Tutorials</a>
						</div>
						<div class="d-flex flex-column flex-lg-row gap-2">
							<a class="btn btn-sm btn-light-info fw-bold" href="documentation/getting-started/changelog.html">Changelog</a>
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Tab panel-->
			</div>
			<!--end::Header tab content-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Container-->
</div>
<!--end::Header navs-->
