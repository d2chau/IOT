require 'test_helper'

class PastRecipesControllerTest < ActionController::TestCase
  setup do
    @past_recipe = past_recipes(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:past_recipes)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create past_recipe" do
    assert_difference('PastRecipe.count') do
      post :create, past_recipe: { date_made: @past_recipe.date_made, pearson_identity: @past_recipe.pearson_identity, user_id: @past_recipe.user_id }
    end

    assert_redirected_to past_recipe_path(assigns(:past_recipe))
  end

  test "should show past_recipe" do
    get :show, id: @past_recipe
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @past_recipe
    assert_response :success
  end

  test "should update past_recipe" do
    patch :update, id: @past_recipe, past_recipe: { date_made: @past_recipe.date_made, pearson_identity: @past_recipe.pearson_identity, user_id: @past_recipe.user_id }
    assert_redirected_to past_recipe_path(assigns(:past_recipe))
  end

  test "should destroy past_recipe" do
    assert_difference('PastRecipe.count', -1) do
      delete :destroy, id: @past_recipe
    end

    assert_redirected_to past_recipes_path
  end
end
