package main

import (
	"fmt"
	"google.golang.org/grpc"
	"net"
	"grpc-server/services"
)

func main() {
	rpcServer := grpc.NewServer() // 创建rpcServer
	services.RegisterUserServiceServer(rpcServer, new(services.UserService))
	listen,_ := net.Listen("tcp",":8081")
	fmt.Println("listen on 8081")
	_ = rpcServer.Serve(listen)


}

