@extends('layouts.admin')
@section('content')
    <section>
        <div class="container">
            <div class="toolbar" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="d-flex align-items-center me-3">
                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-4 lh-1">Users
                            <!--begin::Separator-->
                            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                            <!--end::Separator--></h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-1">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                <!--begin::Svg Icon | path: icons/stockholm/Text/Filter.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
												</g>
											</svg>
										</span>
                                <!--end::Svg Icon-->Filter</a>
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="Create a new account">
                            <a href="#" class="btn btn-sm btn-primary fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account" id="kt_toolbar_create_button">Create</a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Container-->
            </div>
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Users Statistics</span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{ \App\Models\User::count() }} users</span>
                        </h3>
                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
                            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account" id="kt_toolbar_create_button">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
                                <span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
														</svg>
													</span>
                                <!--end::Svg Icon-->New User</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fw-bolder text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                            #
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="min-w-140px">Status</th>
                                    <th class="min-w-120px">Last Seen</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                                {{ $user->id }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-45px me-5">
                                                    <img src="{{ asset('https://ui-avatars.com/api/length=2&background=random&name=' . $user->name) }}" alt="" loading="lazy" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">{{ $user->name }}</a>
                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $user->email }}</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                            <span class="text-muted me-2 fs-7 fw-bold">
                                        @if($user->role_id == 1)
                                                    <span class="badge badge-light-danger fw-bolder fs-8 px-2 py-1 ms-2">
                                            {{$user->role->title}}
                                                    </span>
                                            {{--                                <td><span style="color: darkgrey;">{{$user->role->title ?? "Haven't any Roles"}}</span></td>--}}
                                        @elseif($user->role_id == 2)
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">
                                            {{$user->role->title}}
                                                    </span>
                                            {{--                                <td><span style="color: darkgrey;">{{$user->role->title ?? "Haven't any Roles"}}</span></td>--}}
                                        @else
                                                    <span class="badge badge-light-warning fw-bolder fs-8 px-2 py-1 ms-2">
                                            {{$user->role->title ?? "Haven't any Roles"}}
                                                    </span>
                                            @endif
                                              </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">
                                                    @if(Cache::has('user-is-online-' . $user->id))
                                                        <span class="text-success">Online</span>
                                                    @else
                                                        <span class="text-secondary">Offline</span>
                                                    @endif</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex flex-column w-100 me-2">
                                                <div class="d-flex flex-stack mb-2">
                                                    <span class="text-muted me-2 fs-7 fw-bold">{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            @can('user_show')
{{--                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
                                                <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account{{ $user->id }}" id="kt_toolbar_create_button">
                                                <!--begin::Svg Icon | path: icons/stockholm/General/Settings-1.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            @endcan
                                                @can('user_edit')
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
                                            </a>
                                                @endcan
                                                @can('user_delete')
                                                    <form style="float: right" action="{{ route('users.destroy', $user->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
{{--                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
                                                <!--begin::Svg Icon | path: icons/stockholm/General/Trash.svg-->
                                                <span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																		</span>
                                                <!--end::Svg Icon-->
{{--                                            </a>--}}
                                                    </button>
                                                    </form>
                                                    @endcan
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                                @empty
                                    <tr>
                                        <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
                                    </tr>
                                @endforelse
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            {{------------------------------------------------------}}
        @foreach($users as $user)
        <!--begin::Modal - Create account-->
            <div class="modal fade" id="kt_modal_create_account{{ $user->id }}" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog mw-1000px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Title-->
                            <h2 class="mb-0">Show user: {{$user->name}}</h2>
                            <!--end::Title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Close.svg-->
                                <span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
									</g>
								</svg>
							</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div id="#kt_modal_body" class="modal-body scroll-y m-5">
                            <table class="table table-borderless">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $user->role->title ?? '--' }}</td>
                                </tr>
                            </table>
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create project-->
            <!--end::Modals-->
            @endforeach

            {{--        {!! $users->render() !!}--}}
        {{--        {{ $users->links() }}--}}
            @if($users->total() > $users->perPage())
                <br><br>
            {{ $users->links('vendor.pagination.custom') }}
        @endif
        <!--end::Col-->
        </div>
    </section>
@endsection
@section('scripts')
@endsection
