<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('departement', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('administrationCentrale', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('insolites', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('laboE3M', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('membresLaboE3M', function(Blueprint $table) {
			$table->foreign('id_typeME3M')->references('id')->on('typeMembre')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('membresLaboE3M', function(Blueprint $table) {
			$table->foreign('idLabE3M')->references('id')->on('laboE3M')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('partenairesLaboE3M', function(Blueprint $table) {
			$table->foreign('idLabE3M')->references('id')->on('laboE3M')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('medias', function(Blueprint $table) {
			$table->foreign('id_type')->references('id')->on('typeMedia')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('formEnseigChoixBref', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('etudiantConcours', function(Blueprint $table) {
			$table->foreign('concours_id')->references('id')->on('concours')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('miseAJours', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('telechargements', function(Blueprint $table) {
			$table->foreign('media_id')->references('id')->on('medias')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('departement', function(Blueprint $table) {
			$table->dropForeign('departement_media_id_foreign');
		});
		Schema::table('administrationCentrale', function(Blueprint $table) {
			$table->dropForeign('administrationCentrale_media_id_foreign');
		});
		Schema::table('insolites', function(Blueprint $table) {
			$table->dropForeign('insolites_media_id_foreign');
		});
		Schema::table('laboE3M', function(Blueprint $table) {
			$table->dropForeign('laboE3M_media_id_foreign');
		});
		Schema::table('membresLaboE3M', function(Blueprint $table) {
			$table->dropForeign('membresLaboE3M_id_typeME3M_foreign');
		});
		Schema::table('membresLaboE3M', function(Blueprint $table) {
			$table->dropForeign('membresLaboE3M_idLabE3M_foreign');
		});
		Schema::table('partenairesLaboE3M', function(Blueprint $table) {
			$table->dropForeign('partenairesLaboE3M_idLabE3M_foreign');
		});
		Schema::table('medias', function(Blueprint $table) {
			$table->dropForeign('medias_id_type_foreign');
		});
		Schema::table('formEnseigChoixBref', function(Blueprint $table) {
			$table->dropForeign('formEnseigChoixBref_media_id_foreign');
		});
		Schema::table('etudiantConcours', function(Blueprint $table) {
			$table->dropForeign('etudiantConcours_concours_id_foreign');
		});
		Schema::table('miseAJours', function(Blueprint $table) {
			$table->dropForeign('miseAJours_user_id_foreign');
		});
		Schema::table('telechargements', function(Blueprint $table) {
			$table->dropForeign('telechargements_media_id_foreign');
		});
	}
}