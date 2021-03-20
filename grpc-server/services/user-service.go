package services


import (
	"fmt"
	"golang.org/x/net/context"
)
type UserService struct {

}


func (u *UserService) GetUserInfo(ctx context.Context, req *UserInfoReq) (*UserInfoResp, error) {
	fmt.Println("receive data")
	return &UserInfoResp{
		Id:    req.Id,
		Name: "hello",
		Sex: "nan",
	},nil
}