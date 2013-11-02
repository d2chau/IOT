class PastRecipesController < ApplicationController
  before_action :set_past_recipe, only: [:show, :edit, :update, :destroy]

  # GET /past_recipes
  # GET /past_recipes.json
  def index
    @past_recipes = PastRecipe.all
  end

  # GET /past_recipes/1
  # GET /past_recipes/1.json
  def show
  end

  # GET /past_recipes/new
  def new
    @past_recipe = PastRecipe.new
  end

  # GET /past_recipes/1/edit
  def edit
  end

  # POST /past_recipes
  # POST /past_recipes.json
  def create
    @past_recipe = PastRecipe.new(past_recipe_params)

    respond_to do |format|
      if @past_recipe.save
        format.html { redirect_to @past_recipe, notice: 'Past recipe was successfully created.' }
        format.json { render action: 'show', status: :created, location: @past_recipe }
      else
        format.html { render action: 'new' }
        format.json { render json: @past_recipe.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /past_recipes/1
  # PATCH/PUT /past_recipes/1.json
  def update
    respond_to do |format|
      if @past_recipe.update(past_recipe_params)
        format.html { redirect_to @past_recipe, notice: 'Past recipe was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: 'edit' }
        format.json { render json: @past_recipe.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /past_recipes/1
  # DELETE /past_recipes/1.json
  def destroy
    @past_recipe.destroy
    respond_to do |format|
      format.html { redirect_to past_recipes_url }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_past_recipe
      @past_recipe = PastRecipe.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def past_recipe_params
      params.require(:past_recipe).permit(:user_id, :pearson_identity, :date_made)
    end
end
