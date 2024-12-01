<h1>Members</h1>
<p>
	<button mx-get="members/member_form" mx-build-modal="members-form-modal">Create New Record</button>
</p>
<div id="information"></div>
<div id="loading-memberinformations" class="spinner mt-3 mx-indicator"></div>
<div id="members-container" mx-get="members/fetch_members" mx-trigger="load" mx-indicator="#loading-members"></div>

<style>
h1, p {
	text-align: center;
}

.danger {
	background-color: #cc0000;
	border: 1px #cc0000 solid;
	transition: .3s;
}

.danger:hover {
	background-color: #ee0000;
	border: 1px #ee0000 solid;
}

#information {
	text-align: center;
	padding: 1em;
	color: green;
}
</style>